console.log('скрипт подключен'); //проверка подключения скрипта
jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    console.log($); //проверка работоспособности JQuery
    console.log(jQuery.fn.jquery);//узнать версию JQuery


id_to_top = "#toTop";
// скролл вверх по нажатию
$(id_to_top).click(function(e) {
	e.preventDefault();
 	$('body,html').animate({scrollTop:0},800);
});

$(window).scroll(function(){
    if($(this).scrollTop()>400){
    	$(id_to_top).fadeIn();
    }else{
    	$(id_to_top).fadeOut();
    };
});


// tabs
 
  $('.gir_ul').on('click', 'li:not(.active)', function() {
    $(this)
      .addClass('active').siblings().removeClass('active')
      .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
  });



// сортировка таблицы
// document.addEventListener('DOMContentLoaded', () => {

    const getSort = ({ target }) => {
        const order = (target.dataset.order = -(target.dataset.order || -1));
        const index = [...target.parentNode.cells].indexOf(target);
        const collator = new Intl.Collator(['en', 'ru'], { numeric: true });
        const comparator = (index, order) => (a, b) => order * collator.compare(
            a.children[index].innerHTML,
            b.children[index].innerHTML
        );
        
        for(const tBody of target.closest('table').tBodies)
            tBody.append(...[...tBody.rows].sort(comparator(index, order)));

        for(const cell of target.parentNode.cells)
            cell.classList.toggle('sorted', cell === target);
    };
    
    document.querySelectorAll('.table_sort thead').forEach(tableTH => tableTH.addEventListener('click', () => getSort(event)));
    
// });


}); //конец ready


// ajax
function pagin(th){
$("#ekran_block").show();
$("#circularG").show();
a=$(th).attr("href");
tar_del=$("#paginator");
tar_add=$(tar_del).parent();
$.get(a,{ajax:"yes"},function(dates){
$(tar_del).remove();
$(tar_add).append(dates);
if (resizer) resizer_one();
//window.history.pushState
//window.history.replaceState

if (window.history.pushState) window.history.pushState("Object {}", "notitle", a);
else if (window.history.replaceState) window.history.replaceState("Object {}", "notitle", a);
$("#circularG").hide();
$("#ekran_block").hide();
show_favorite();
});
return false;
}


// favorite
var sec_favorite=new Array(), el_favorite=new Array();
function show_favorite(){
for(i in sec_favorite) {
if (sec_favorite[i]!=0){
$("#sec_"+sec_favorite[i]+"_add").hide();
$("#sec_"+sec_favorite[i]+"_del").show();
}
}

for(i in el_favorite) {
if (el_favorite[i]!=0){
$("#el_"+el_favorite[i]+"_add").hide();
$("#el_"+el_favorite[i]+"_del").show();
}
}

$('.favorites').click(function(){
add_del_favorites($(this).attr('id'));
return;
});

}




function add_del_favorites(dat){
$("#"+dat).hide();
$.getJSON('/inc/favorite.php',{id:dat},function(data,status){
                                if( status=='success' ){
                                    if (data.f_aja) $("#"+data.f_aja).show();
                                    if (data.f_err) {
                                        alert(data.f_err);
                                        if (data.id) $("#"+data.id).show();
                                    }
                                    if (data.f_login) {
                                        $("#"+data.id).show();
                                        openAuthorizePopup();
                                    }
                                }else{
                                    alert('В процессе отправки произошла ошибка :(');
                                }
                            });
return;
}


$(document).ready(function(){
show_favorite();
});