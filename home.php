<?php
$page_title = 'Home Page';
require_once('includes/load.php');
if (!$session->isUserLoggedIn(true)) {
  redirect('index.php', false);
} else {
  redirect('popular_products.php', false);
}
?>
<?php include_once('layouts/header.php'); ?>
<div class="wrapper">
  <main class="page-main ">
    <div>
      <!-- <h1 style="color: black; font-size:40px; margin-right: 100px;" class="h1">Welcome To My Supplier</h1> -->
    </div>
  </main>
</div>
<?php include_once('layouts/footer.php'); ?>

<style scoped>
  @import url("https://fonts.googleapis.com/css?family=Dosis:400,700");

  :root {
    --main-white-color: #f2f2f2;
    --main-black-color: black;
    --main-purple-color: #9e89b8;
  }

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  h1 {
    font-family: "Lucida Console", "Courier New", monospace;

  }

  button {
    background: none;
    outline: none;
    cursor: pointer;
  }

  ul {
    list-style: none;
  }

  a {
    text-decoration: none;
    color: inherit;
  }

  body {
    font: 16px/1.5 "Dosis", sans-serif;
    /*IE FIX*/
    /*display: flex;
  flex-direction: column;*/
  }

  /* CONTAINER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  .wrapper {
    display: flex;
    flex-direction: column;
    min-height: 90vh;
  }

  .wrapper>* {
    padding: 20px;
  }


  /* HEADER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  .page-header {
    background: var(--main-white-color);
  }

  .page-header nav {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }

  .page-header ul {
    display: flex;
    order: 1;
    width: 100%;
    margin-top: 15px;
  }

  .page-header ul li:not(:last-child) {
    padding-right: 15px;
  }

  .page-header .cta-contact {
    font-family: inherit;
    font-size: 1.2rem;
    padding: 5px 18px;
    border: 1px solid;
    border-radius: 5px;
  }


  /* MAIN
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  .page-main {
    display: flex;
    /* flex-direction: column; */
    justify-content: center;
    /* flex-grow: 1; */
    min-height: 350px;
    min-height: 80vh;

    background:  url("plier.jpg") no-repeat center / cover;
    background-blend-mode: luminosity;
    color: var(--main-white-color);
    margin-top: 0px;
  }

  .page-main div {
    max-width: 500px;
  }

  .page-main h1 {
    margin-bottom: 20px;
  }

  .page-main p+p {
    margin-top: 10px;
  }


  /* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  .page-footer {
    display: flex;
    flex-direction: column-reverse;
    background: var(--main-white-color);
  }

  .page-footer ul {
    display: flex;
    font-size: 1.5rem;
    margin-bottom: 5px;
  }

  .page-footer ul li:not(:last-child) {
    margin-right: 20px;
  }


  /* MQ
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  @media screen and (min-width: 550px) {
    .page-header ul {
      width: auto;
      margin-top: 0;
    }

    .page-header .cta-contact {
      order: 1;
    }

    .page-footer {
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }

    .page-footer ul {
      margin-bottom: 0;
    }
  }

  @media screen and (min-width: 768px) {
    body {
      font-size: 18px;
    }

    .page-main {
      padding-left: 90px;
    }
  }
</style>