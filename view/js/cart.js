// Arme evenement clic sur + et - du panier
$(".fa-plus").click((e) => {
  let name = e.currentTarget.dataset.productName;
  console.log(name);

  // Envoie un POST
  $.post(
    "index.php?action=productAdded",
    {
      nameProduct: name,
      quantity: 1,
      size: "size3",
    },
    () => {
      console.log("Votre article a bien ete ajoute");
    }
  );
});
// Arme evenement clic sur + et - du panier
$(".fa-minus").click((e) => {
  let name = e.currentTarget.dataset.productName;
  console.log(name);

  // Envoie un POST
  $.post(
    "index.php?action=removefromcartajax",
    {
      nameProduct: name,
      quantity: 1,
    },
    () => {
      console.log("Votre article a bien ete supprimé");
    }
  );
});

$(document).ready(() => {
  setInterval(() => {
    $.get("index.php?action=taillepanierajax", (data) => {
      document.querySelector("#taille-panier").innerHTML = data;
    });
  }, 1000);
});
