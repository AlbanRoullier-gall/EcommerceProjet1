<?php 

class Sponsor
{
    public string $sponsor_information_image;
    public string $sponsor_information_text;
    public string $sponsor_information_link;

    public function get_sponsor()
    {   
        $json_file_url = "http://playground.burotix.be/adv/banner_for_isfce.json";
        $json_string = file_get_contents($json_file_url);
        $sponsor_informations_array = json_decode($json_string, true);

        $this->sponsor_information_image = $sponsor_informations_array['banner_4IPDW']['image'];
        $this->sponsor_information_text = $sponsor_informations_array['banner_4IPDW']['text'];
        $this->sponsor_information_link = $sponsor_informations_array['banner_4IPDW']['link'];
    }
}

