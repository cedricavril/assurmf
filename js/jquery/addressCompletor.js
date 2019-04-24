// autocomplete postcode and city values via field(s) selector. order is address, postcode, city
// not a great code, will have to add the 5 (limit) other suggestions from the received collection
// from the API in an input type = text listbox suggestion
// if no target, complete postcode and city. otherwise, city will complete postcode or vice versa.
autocompleteAddressFields = function(field, targetSel = '', search = ''){

  if (targetSel != '') data  = search;
  else data = field.val();

// had to construct an object since GET ?q= doesn't support utf8
  const url = new URL('https://api-adresse.data.gouv.fr/search');
  url.searchParams.append('q', data);

  console.log("recherche avec : " + data);

  $.ajax({
      url: url,
      success: function( successMsg ) {

        console.log(successMsg);

          if (typeof(successMsg.features[0]) != "undefined") {
            if (targetSel == '') {
              $(citySel).val(successMsg.features[0].properties.city);
              $(postcodeSel).val(successMsg.features[0].properties.postcode);
              console.log("pas de target");
            } else if(targetSel == postcodeSel) {
              console.log("target prend : " + successMsg.features[0].properties.postcode);
              $(postcodeSel).val(successMsg.features[0].properties.postcode);
            } else {
              console.log("target : " + $(targetSel));
              $(citySel).val(successMsg.features[0].properties.city);
            }
          }
      }, 
      fail: function(failMsg) {
          alert("fail");
      }
  });
}

addressCompletor = function(sel){
  addressSel = sel[0];
  postcodeSel = sel[1];
  citySel = sel[2];

  $(addressSel).change(function(){
    autocompleteAddressFields(sel);
    // plutôt : postcodeVal = searchPostcode(adresse) et cityval = searchCity(adresse) 
    // SI l'un ou l'autre pas déjà modifié lors de la saisie
  });

  $(postcodeSel).change(function(){
    autocompleteAddressFields(sel, citySel, $(postcodeSel).val());
    // plutôt : cityVal = searchCity(postcode)
  });

  $(citySel).change(function(){
    autocompleteAddressFields(sel, postcodeSel, $(citySel).val());
    // plutôt : postcodeVal = searchPostcode(texte)
  });
}