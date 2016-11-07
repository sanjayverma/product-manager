<!-- Add Item Dialog -->
<div id="addtodoItemForm" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="addtodoItemForm"
     aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content form-horizontal" role="form" action="#" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="moadl-title">Create New To Do Item</h4>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-xs-12 col-sm-2 form-control-label" for="title">Title:</label>
          <div class="col-xs-12 col-sm-10">
            <input id="title" class="form-control" type="text" name="title" />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xs-12 col-sm-2 form-control-label" for="dueDate">Due Date</label>
          <div class="col-xs-12 col-sm-10">
            <div class="input-group">
              <input id="dueDate" class="form-control" type="text" data-plugin="datepicker" data-container="#addtodoItemForm"
                     />
              <span class="input-group-addon">
                <i class="icon wb-calendar" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xs-12 col-sm-2 form-control-label" for="people">People:</label>
          <div class="col-xs-12 col-sm-10">
            <select id="people" multiple="multiple" class="plugin-selective">
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="form-actions">
          <button class="btn btn-primary" data-dismiss="modal" type="button">
            Add This Item
          </button>
          <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">
            Cancel
          </a>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End Add Item Dialog -->



<!-- Edit Dialog -->
<div class="modal fade" id="edittodoItemForm" aria-hidden="true" aria-labelledby="edittodoItemForm"
     role="dialog" tabindex="-1" data-show="false">
  <div class="modal-dialog">
    <form class="modal-content form-horizontal" action="#" method="post" role="form">
      <div class="modal-header">
        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
        <h4 class="modal-title">Edit To Do Item</h4>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-xs-12 col-sm-2 form-control-label" for="editTitle">Title:
          </label>
          <div class="col-xs-12 col-sm-10">
            <input type="text" class="form-control" id="editTitle" name="editTitle">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xs-12 col-sm-2 form-control-label" for="editStarts">Due Date:
          </label>
          <div class="col-xs-12 col-sm-10">
            <div class="input-group">
              <input type="text" class="form-control" id="editDueDate" name="editDueDate" data-container="#edittodoItemForm"
                     data-plugin="datepicker">
              <span class="input-group-addon">
                <i class="icon wb-calendar" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xs-12 col-sm-2 form-control-label" for="editPeople">People:
          </label>
          <div class="col-xs-12 col-sm-10">
            <select id="editPeople" multiple="multiple" class="plugin-selective"></select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="form-actions">
          <button class="btn btn-primary" data-dismiss="modal" type="button">Save</button>
          <button class="btn btn-danger" data-dismiss="modal" type="button">Delete</button>
          <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End Edit Dialog -->
<!-- Footer -->
<footer class="site-footer">
  <div class="site-footer-legal">© 2016 <a href="#">Production Manager</a></div>
  <div class="site-footer-right">
    Crafted with <i class="red-600 wb wb-heart"></i> by <a href="#">Production Manager</a>
  </div>
</footer>


<!-- Core  -->
{!!Html::script('../public/assets/global/vendor/babel-external-helpers/babel-external-helpers.js')!!}
{!!Html::script('../public/assets/global/vendor/jquery/jquery.js')!!}
{!!Html::script('../public/assets/global/vendor/tether/tether.js')!!}
{!!Html::script('../public/assets/global/vendor/bootstrap/bootstrap.js')!!}
{!!Html::script('../public/assets/global/vendor/animsition/animsition.js')!!}
{!!Html::script('../public/assets/global/vendor/mousewheel/jquery.mousewheel.js')!!}
{!!Html::script('../public/assets/global/vendor/asscrollbar/jquery-asScrollbar.js')!!}
{!!Html::script('../public/assets/global/vendor/asscrollable/jquery-asScrollable.js')!!}
<!-- Plugins -->
{!!Html::script('../public/assets/global/vendor/switchery/switchery.min.js')!!}
{!!Html::script('../public/assets/global/vendor/intro-js/intro.js')!!}
{!!Html::script('../public/assets/global/vendor/screenfull/screenfull.js')!!}
{!!Html::script('../public/assets/global/vendor/slidepanel/jquery-slidePanel.js')!!}
{!!Html::script('../public/assets/global/vendor/chartist/chartist.js')!!}
{!!Html::script('../public/assets/global/vendor/jsgrid/jsgrid.js')!!}
{!!Html::script('../public/assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js')!!}
{!!Html::script('../public/assets/global/vendor/aspieprogress/jquery-asPieProgress.js')!!}
{!!Html::script('../public/assets/global/vendor/matchheight/jquery.matchHeight-min.js')!!}
{!!Html::script('../public/assets/global/vendor/jquery-selective/jquery-selective.min.js')!!}
{!!Html::script('../public/assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js')!!}
{!!Html::script('../public/assets/global/vendor/jquery-ui/jquery-ui.min.js')!!}
{!!Html::script('../public/assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js')!!}

<!-- Scripts -->
{!!Html::script('../public/assets/global/js/State.js')!!}
{!!Html::script('../public/assets/global/js/Component.js')!!}
{!!Html::script('../public/assets/global/js/Plugin.js')!!}
{!!Html::script('../public/assets/global/js/Base.js')!!}
{!!Html::script('../public/assets/global/js/Config.js')!!}
{!!Html::script('../public/assets/js/Section/Menubar.js')!!}
{!!Html::script('../public/assets/js/Section/Sidebar.js')!!}
{!!Html::script('../public/assets/js/Section/PageAside.js')!!}
{!!Html::script('../public/assets/js/Plugin/menu.js')!!}
<!-- Config -->
{!!Html::script('../public/assets/global/js/config/colors.js')!!}
{!!Html::script('../public/assets/js/config/tour.js')!!}

<!-- Page -->
{!!Html::script('../public/assets/js/Site.js')!!}
{!!Html::script('../public/assets/global/js/Plugin/asscrollable.js')!!}
{!!Html::script('../public/assets/global/js/Plugin/slidepanel.js')!!}
{!!Html::script('../public/assets/global/js/Plugin/switchery.js')!!}
{!!Html::script('../public/assets/global/js/Plugin/matchheight.js')!!}
{!!Html::script('../public/assets/global/js/Plugin/aspieprogress.js')!!}
{!!Html::script('../public/assets/global/js/Plugin/bootstrap-datepicker.js')!!}
{!!Html::script('../public/assets/examples/js/dashboard/team.js')!!}
{!!Html::script('../public/assets/examples/js/tables/jsgrid-db.js')!!}
{!!Html::script('../public/assets/examples/js/tables/jsgrid.js')!!}

<script>
    (function (document, window, $) {
        'use strict';
        var Site = window.Site;
        $(document).ready(function () {
            Site.run();
        });
    })(document, window, jQuery);
</script>

</body>
</html>
