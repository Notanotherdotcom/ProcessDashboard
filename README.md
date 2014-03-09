# ProcessWire2.4+ ProcessDashboard

This module creates a blank dashboard page in your site admin and sets it as default instead of the page list. You can use this as it is, or create new admin roles that can see the dashboard but not necessarily the page list (eg. for intranet systems etc where the page list isn't required for some roles).

To use it, extract the attached zip file into your /site/modules/ directory and check for new modules in the ProcessWire Admin area, then install the module.

Once installed, click on the "Admin" link in the navigation bar at the top-left of the page to see the dashboard.

You can edit the title of the page like any other page - it is the first page in the Page tree under Admin.

To change the markup of the page, edit the files in the /site/modules/ProcessDashboard/ folder. The dashboard.php file is the page template, and you can apply any custom CSS and Javascript in the .css and .js files.

This module also creates a permission - "dashboard" - that you must assign to any admin-related roles you create so that when they log into the admin they can see the dashboard, otherwise they will encounter an error.

__Credits:__

* This module uses some code from diogo's ProcessHomeAdmin module: https://github.com/ocorreiododiogo/ProcessHomeAdmin

__Updates:__

* v1.0.0 - first release
* v1.0.1 - bugfix