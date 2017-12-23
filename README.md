# homepage
Revolve Hosting's Official Webpage

### Page Format
Each new page that is to be created should use the following format:

1. Use `.php` file format.
2. Use the following starter template to be used by all pages:

```php
<?php
$page_title = '[Page Title]';
?>
<? include 'header.php'; ?>
<div class="page-wrapper">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <ol class="breadcrumb m-b-10">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <!-- add new breadcrumb items here if needed -->
                  <li class="breadcrumb-item active"><?= $page_title ?></li>
              </ol>
          </div>
      </div>
  </div>
  <!-- Page content here -->
<? include 'footer.php'; ?>
```
3. If the new page is nested within a directory other than the home directory (I.e. `revolve.host/somedirectory/index.php`), you may want to extend the breadcrumb by adding `<li class="breadcrumb-item"><a href="[file or directory]">[Directory or Page]/a></li>` in the specified place.

##### &copy; 2017 Resolve Hosting. All Rights Reserved.
