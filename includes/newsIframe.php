<style type="text/css">
  .accordion_parent {
  display: block;
  font-size: 25px;
  height: 40px;
  position: relative;
  cursor: pointer;
}
.a_p-character {
  line-height: 40px;
  margin: 0 0 0 25px;
  display: block;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
.a_p-icon {
  display: block;
  border-left: 10px solid #000;
  border-top: 10px solid #0000;
  border-bottom: 10px solid #0000;
  position: absolute;
  top: 10px;
  transition: .2s;
}
.accordion_parent {
  color: #eb008b;
}
.accordion_children_c {
  height: 0;
  overflow: hidden;
  transition: .3s;
}
.page-content {
  background-color: white;
}
</style>
<?php
  $res = $db->query("SELECT * FROM amf_news ORDER BY id DESC LIMIT 0, 10");
  $res->execute();

        while($news = $res->fetch(PDO::FETCH_ASSOC))
        {?>
<style type="text/css">
#accordion<?= $news['id']; ?> {display: none;}
#accordion<?= $news['id']; ?>:checked ~ .accordion_parent {
	color: black;
}
#accordion<?= $news['id']; ?>:checked ~ .accordion_parent .a_p-icon {transform: rotate(90deg); color: black;}
#accordion<?= $news['id']; ?>:checked ~ .accordion_children_c {
  	height: auto;
	transform: rotate(360deg);
}
</style>
  <input type="checkbox" id="accordion<?= $news['id']; ?>">
  <label for="accordion<?= $news['id']; ?>" class="accordion_parent">
    <p class="a_p-character"><?= $news['title']; ?></p>
    <span class="a_p-icon"></span>
  </label>
  <ul class="accordion_children_c m0">
          <main class="page-content jumbotron">
            <?= $news['news']; ?>
          </main>
  </ul>
<?php   }?>
</div>

<script type="text/javascript">

function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}

  $(".accordion_parent").click(function(e){
    console.log(e);
	  $("html, body").animate( { scrollTop: $('#goThere').offset().top }, 500);
  });

$( document ).ready(function() {
  if (id = (getQueryVariable('id'))) {
      $("#accordion" + id).click();
      $("html, body").animate( { scrollTop: $('#goThere').offset().top }, 500);
  };
})

</script>