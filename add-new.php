<ul class="nav nav-tabs" id="maincontent" role="tablist">
          <li class="active"><a href="#searchbykeyword" role="tab" data-toggle="tab">ค้นหาจากคีย์เวิร์ด</a></li>
          <li><a href="#searchbycategory" role="tab" data-toggle="tab">ค้นหาจากหมวดหมู่ </a></li>
		  <li><a href="#searchbyuniversity" role="tab" data-toggle="tab">ค้นหาจากมหาลัย </a></li>
       </ul><!--/.nav-tabs.content-tabs -->


       <div class="tab-content">

          <div class="tab-pane fade in active" id="home">
             <p><?php get_form('searchcourses'); ?></p>
          </div><!--/.tab-pane -->

          <div class="tab-pane fade" id="profile">
             <p><?php get_form('searchcategory'); ?></p>
          </div><!--/.tab-pane -->
		  
		  <div class="tab-pane fade" id="three">
             <p><?php get_form('searchuniversity'); ?></p>
          </div><!--/.tab-pane -->



       </div><!--/.tab-content -->

			<p><?php get_form('searchbydata');?></p>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>