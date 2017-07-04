<div class="content_left">
   <ul id="listnew">
      <?php if (!empty($list)): ?>
         <?php $i = 1; ?>
         <?php foreach ($list as $row): ?>
            <?php if ($i <= 5): ?>
               <li>
                  <div class="item_news">
                     <div class="div_images">
                        <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><img
                               src="<?php echo public_url('uploads/news/' . $row->images) ?>"></a>
                     </div>
                     <div class="div_content">
                        <h2><a class="title_new" href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?></a></h2>
                        <div class="date"><?php echo date("d/m/Y", strtotime($row->createTime)) ?></div>
                        <div class="description">
                           <?php echo trim_text($row->description,400) ?>
                        </div>
                     </div>
                  </div>
               </li>
            <?php else : ?>
               <li>
                  <div class="item_news">
                     <div class="div_images">
                        <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>">
                           <img src="<?php echo public_url('uploads/news/' . $row->images) ?>"></a>
                     </div>
                     <div class="div_content">
                        <a class="title_new" href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?></a>
                        <div class="date"><?php echo date("d/m/Y", strtotime($row->createTime)) ?></div>
                        <div class="description">
                           <?php echo trim_text($row->description,400) ?>
                        </div>
                     </div>
                  </div>
               </li>
            <?php endif ?>
            <?php $i++ ?>
         <?php endforeach; ?>
      <?php endif ?>
   </ul>
   <?php if ($count > 5): ?>
      <div class="pagination">
      </div>
   <?php endif; ?>
</div>
<?php

?>
<script>
   $(document).ready(function () {
      Pagging();
   });
   function Pagging() {
      var items = $("#listnew li");
      var numItems = items.length;
      $("#num").html(numItems);
      var perPage = 5;
      // only show the first 2 (or "first per_page") items initially
      items.slice(perPage).hide();
      // now setup pagination
      $(".pagination").pagination({
         items: numItems,
         itemsOnPage: perPage,
         cssStyle: "",
         onPageClick: function (pageNumber) { // this is where the magic happens
            // someone changed page, lets hide/show trs appropriately
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;

            items.hide() // first hide everything, then show for the new page
                .slice(showFrom, showTo).show();
         }
      });
   }
</script>