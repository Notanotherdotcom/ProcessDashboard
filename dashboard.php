<?php
echo "<p>This is the $page->title page. It will replace the page list as the first page you see when you login to the ProcessWire admin.</p>";
echo "<p>You can <a href='{$config->urls->admin}page/edit/?id=$page'>edit the title of the page</a> like any other page - it is the first page in the Page tree under Admin.</p>";
echo "<p>To change the markup of the page, edit the files in the /site/modules/ProcessDashboard/ folder. The dashboard.php file is the page template, and you can apply any custom CSS and Javascript in the .css and .js files.</p>";