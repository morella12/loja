$(document).ready(function()
{
  $('#tasks ul').append('<li><a href="http://maiscorretores.com/node/add">Adicionar Imóvel</a></li> <li><a href="http://maiscorretores.com/user/logout">Sair</a></li>');
  
  var classe = ['perfil', 'editar-perfil', 'rastrear','add-imovel', 'sair'];
  var cont = 0;
  var finalidadeC = $(".form-item-filtro-finalidade-corretor select");
  var comprarC = $(".buttons-c-a .btn-comprar");
  var alugarC = $(".buttons-c-a .btn-alugar");

  $('#tasks li').each(function()
  {
    if($(this, 'a').text() != 'Rastrear')
      $(this).addClass(classe[cont]);

    else
      $(this).remove();
    cont++;
  });
  
  $('.perfil a').text('Perfil');
  $('.editar-perfil a').text('Editar Perfil');

  
  $('.logged-in.page-user- #page-title').html('Bem Vindo(a) ' + $('#page-title').text() + '<style> .page-user- h1#page-title:before {     content: "" }</style>');

  setTimeout(function()
  {
    if($('.row lista-imoveis') == true)
    {
      $('#block-block-46').insertAfter($('#main-content-header'));
      $('#block-block-46').css({ visibility: 'visible'});
      alert("Bem ao site + CORRETORES");
    }
    
    else
    {
      $('#block-block-46').css({ visibility: 'hidden'});
      $('.page-user- article').css({margin : 'auto'});
      alert('Os melhores corretores da sua cidade você encontra aqui!');
    }

  },3000);
  
    comprarC.click(function()
  {
    $('select').val("0").attr({ selected : 'selected' }).change();
    btnAtiva(comprarC,alugarC);

  });


  alugarC.click(function()
  {
    $('select option[value="1"]').attr({ selected : 'selected' }).change();
    btnAtiva(alugarC,comprarC);
  });
},$ = jQuery);