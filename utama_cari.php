<?php
session_start();
include "db/db.php";
include "header.php";
include "sidebar.php";
include "top-header.php";
?>
<link rel="stylesheet" type="text/css" href="assets/css/card.css">
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Ticket</h5>
        </div>
        <div class="card-body ">
          <div class="table-responsive">
            <div class="drag-container">
              <ul class="drag-list">
                <li class="drag-column drag-column-on-hold">
                  <span class="drag-column-header">
                    <h2 align="center">Pending</h2>
                  </span>

                  <ul class="drag-inner-list" id="1" value="1">
                    <?php 
                    if ($_SESSION['role'] == 'admin') {
                      $pending = $db->query("SELECT * FROM ticket WHERE status=1 ORDER BY created_at DESC", 0);
                    }else{
                      $pending = $db->query("SELECT * FROM ticket WHERE id_user=".$_SESSION['id']." AND status=1 ORDER BY created_at DESC", 0);
                    }

                    while($row_pending = $pending->fetch_assoc()) {
                      ?>
                      <li class="drag-item" value="<?= $row_pending['id'] ?>">
                        <div class="title"><?= $row_pending['title'] ?></div>
                        <div class="created_by">Created By : <span><?= $row_pending['created_by'] ?></span></div>
                        <div class="date">Created Date : <span><?= $helpers->dateTimeIndonesia($row_pending['created_at']) ?></span></div>
                        <div class="date">Deadline : <span><?= $helpers->dateTimeIndonesia($row_pending['created_at']) ?></span></div>
                        <button type="button" class="button" data-toggle="modal" data-target="#detail" onclick="getDetail(<?= $row_pending['id'] ?>)">
                          DETAIL
                        </button>
                      </li>
                    <?php } ?>
                  </ul>
                </li>
                <li class="drag-column drag-column-in-progress">
                  <span class="drag-column-header">
                    <h2 align="center">Work in Progress</h2>
                  </span>
                  <ul class="drag-inner-list" id="2" value="0">
                    <?php 
                    if ($_SESSION['role'] == 'admin') {
                      $progress = $db->query("SELECT * FROM ticket WHERE status=0 ORDER BY created_at DESC", 0);
                    }else{
                      $progress = $db->query("SELECT * FROM ticket WHERE id_user=".$_SESSION['id']." AND status=0 ORDER BY created_at DESC", 0);
                    }

                    while($row_progess = $progress->fetch_assoc()) {
                      ?>
                      <li class="drag-item" value="<?= $row_progess['id'] ?>">
                        <div class="title"><?= $row_progess['title'] ?></div>
                        <div class="created_by">Created By : <span><?= $row_progess['created_by'] ?></span></div>
                        <div class="date">Created Date : <span><?= $helpers->dateTimeIndonesia($row_progess['created_at']) ?></span></div>
                        <div class="date">Deadline : <span><?= $helpers->dateTimeIndonesia($row_progess['deadline']) ?></span></div>
                        <button type="button" class="button" data-toggle="modal" data-target="#detail" onclick="getDetail(<?= $row_progess['id'] ?>)">
                          DETAIL
                        </button>
                      </li>
                    <?php } ?>
                  </ul>
                </li>
                <li class="drag-column drag-column-approved">
                  <span class="drag-column-header">
                    <h2 align="center">Done</h2>
                  </span>
                  <ul class="drag-inner-list" id="3" value="2">
                    <?php 
                    if ($_SESSION['role'] == 'admin') {
                      $done = $db->query("SELECT * FROM ticket WHERE status=2 ORDER BY created_at DESC", 0);
                    }else{
                      $done = $db->query("SELECT * FROM ticket WHERE id_user=".$_SESSION['id']." AND status=2 ORDER BY created_at DESC", 0);
                    }

                    while($row_done = $done->fetch_assoc()) {
                      ?>
                      <li class="drag-item" value="<?= $row_done['id'] ?>">
                        <div class="title"><?= $row_done['title'] ?></div>
                        <div class="created_by">Created By : <span><?= $row_done['created_by'] ?></span></div>
                        <div class="date">Created Date : <span><?= $helpers->dateTimeIndonesia($row_done['created_at']) ?></span></div>
                        <div class="date">Deadline : <span><?= $helpers->dateTimeIndonesia($row_done['deadline']) ?></span></div>
                        <button type="button" class="button" data-toggle="modal" data-target="#detail" onclick="getDetail(<?= $row_done['id'] ?>)">
                          DETAIL
                        </button>
                      </li>
                    <?php } ?>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div id="modal-content" class="modal-content"></div>
  </div>
</div>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/dragula.min.js"></script>
<script src="assets/js/card.js"></script>