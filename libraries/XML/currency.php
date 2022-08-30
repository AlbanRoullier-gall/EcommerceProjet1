<?php

class Currency{
    
    public float $rate;
    public float $rate_updated;


    public function get_currency()
    {
    $currency_xml_informations = "http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml";
    $currencies = simplexml_load_file($currency_xml_informations);
        
    foreach($currencies->getDocNamespaces() as $strPrefix => $strNamespace)
    {
        if(empty($strPrefix)){
            $currencies->registerXPathNamespace("default",$strNamespace);
        }
    }
    $xpath_default = '//default:Cube/default:Cube[@currency="USD"]';
    $this->rate = floatval($currencies->xpath($xpath_default)[0]['rate']);
    }    
    
    public function get_memory_currency_updated(){
        if (!isset($_COOKIE['RATE'])){
            $this->get_currency();
            setcookie(
                'RATE',
                $this->rate,
                [
                    'expires' => time() + 1*24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );
            $this->rate_updated = $this->rate;
        }
        elseif (isset($_COOKIE['RATE'])){
            $this->rate_updated = $_COOKIE['RATE'];
        }
        else
        {
            throw new Exception("Les accès aux données de taux sont compromis");
        }
    }
}


