<? include("top.php"); ?>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
      <h1 class="title">Notifications</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
      <div class="card">
        <ul class="table-view">
          <li class="table-view-cell table-view-divider">Unread</li>
          <li class="table-view-cell">
            <strong>No Notifications</strong>
          </li>
          <li class="table-view-cell table-view-divider">Read</li>
          <li class="table-view-cell">
            <a class="push-right" href="https://github.com/twbs/ratchet/">
              <strong>Test one</strong>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <? include("bottom.php"); ?>
    