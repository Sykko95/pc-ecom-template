function priceFormat(value){
    return Intl.NumberFormat('pt-BR', {style: 'currency', currency:'BRL'}).format(value);
}
function sortDesc(p){  
   return function(a,b){  
      return b[p] - a[p];
   }  
}