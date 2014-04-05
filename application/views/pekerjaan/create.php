<div id="main-content">
   <div class="container-fluid">
       <div class="row-fluid">
           <div class="span12">
               <h3 class="page-title">Pekerjaan</h3>
               <?=anchor('pekerjaan', '<i class="icon-th-list"></i>', array('class' => 'btn btn-mini btn-success'));?>
           </div>
       </div>
       <br>
       <?=$message;?>
       <div class="row-fluid">
           <div class="span12">
                <div class="widget">
                     <div class="widget-title">
                          <h4><i class="icon-post"></i></h4>
                          <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                          </span>
                     </div>
                     <div class="widget-body form">
                          <?=form_open($action, 'class="form-horizontal"');?>
                              <div class="control-group">
                                   <label class="control-label">Pekerjaan</label>
                                   <div class="controls">
                                       <input type="text" name="pk_nama" required="true" value="<?=set_value('pk_nama') ? set_value('pk_nama') : $query['pk_nama']?>" class="span12" autocomplete="off" autofocus="true" />
                                   </div>
                              </div>
                              <div class="form-actions">
                                   <button type="submit" class="btn btn-mini btn-success"><i class="icon-save"></i> Submit</button>
                                   <?=anchor($this->uri->segment(1), '<i class="icon-undo"></i> Cancel', array('class' => 'btn btn-mini '));?>
                              </div>
                          </form>
                     </div>
                </div>
           </div>
       </div>
   </div>
</div>