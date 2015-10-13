<?php
/**
 * Hyper Haze Hackathon
 *
 * @link    http://www.hackathon.io/haze3 for Team Project
 * @link    http://www.hackathon.io/hyper-haze for Hackathon Site
 * @author  Zion Ng <zion@intzone.com>
 * @version 2015-10-13T12:00+08:00 zion.ng
 */

$fields = array(
    'Name' => 'text',
    'Email' => 'text',
    'Remarks' => 'textarea',
);
?>

Sign our petition to act against errant companies!<br /><br />

<div class="row">
  <div class="col-sm-6">
    <form class="form-horizontal">
      <?php foreach ($fields as $field => $type): ?>
        <div class="form-group">
          <label class="form-label col-sm-3"><?php echo $field; ?></label>
          <div class="form-element col-sm-9">
            <?php
            if ('textarea' == $type) {
                echo '<textarea rows="10" class="form-control"></textarea>';
            } else {
                printf('<input type="%s" class="form-control" value="" />', $type);
            }
            ?>
          </div>
        </div>
      <?php endforeach; ?>

      <div class="form-group">
        <label class="form-label col-sm-3"></label>
        <div class="form-element col-sm-9">
          <input type="button" value="Submit" />
        </div>
      </div>
    </form>
  </div>
</div>
