<!--
  * Custom Page for About Us Page
-->
<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
<?php get_template_part('partials/slider'); ?>


  <main class="about-us">
    <div class="heading heading__secondary u-center-text u-margin-top-big">About US</div>

    <div class="row">
      <div class="main-para">
        <p class="paragraph">
          For nearly a decade, Opus One Design Build has established a reputation as the “Gold Standard”, industry-leading Construction and Design Build organization. Comprised of a talented team of the industry’s best professionals, we cater to some of the largest markets across North America in the following categories:
        </p>
        <ul class="main-list">
          <li>Residential Construction</li>
          <li>Commercial Construction</li>
          <li>Leasehold Office</li>
          <li>Cutting Edge Industrial</li>
          <li>Renovation</li>
          <li>Service</li>
          <li>Maintenance</li>
        </ul>
      </div>
    </div>

    <div class="media__container">
      <img src="<?php echo get_template_directory_uri() . '/images/about-us-1.jpg' ?>" alt="" class="media">
    </div>

    <div class="row">
      <div class="col-1-of-3">

        <h3 class="heading heading__tertiary">What We Do</h3>
        <p class="paragraph">
          There is no job that is too big and there are no jobs that are too small. We value all of our customers and projects equally. We categorize the work that we do first by building type, then by project category, and finally by services available. Building structures we work with:
        </p>
        <ul>
          <li>Residential detached</li>
          <li>Residential semi-attached town homes</li>
          <li>Low-rise condominiums</li>
          <li>Industrial, commercial and office buildings</li>
          <li>Free-standing retail spaces</li>
          <li>Retail spaces within shopping centers</li>
          <li>Restaurants</li>
          <li>Hotels and Hospitality</li>
        </ul>

        <h3 class="heading heading__tertiary">The categories we specialize in are:</h3>
        <ul>
          <li>New Construction (Residential and Commercial)</li>
          <li>Renovation & Remodel (Residential and Commercial)</li>
        </ul>
        <p class="paragraph">
          Clients have engaged us in some, or all, of the following services depending on the needs of their project and our professional recommendation:
        </p>
        <ul>
          <li>Turn Key Construction/Remodel</li>
          <li>Investment Remodels</li>
          <li>Cost consultation</li>
          <li>Project financing</li>
          <li>Complete project management</li>
          <li>Architectural services</li>
          <li>Interior Design</li>
          <li>Landscaping Design</li>
          <li>Engineering services</li>
          <li>Blueprint production, input and/or reading</li>
          <li>Structural design and execution</li>
          <li>Permit application process oversight</li>
          <li>Committee of Adjustment process oversight</li>
          <li>Sourcing, selection and management of all applicable trades</li>
        </ul>

      </div>
      <div class="col-1-of-3">
        <h3 class="heading heading__tertiary">What Makes Us Different</h3>
        <ul>
          <li>92% of our projects are completed on time, with a 6-8% variance</li>
          <li>96% of our projects are completed within budget, with a 5-7% variance</li>
          <li>We have an in-house design team comprised of award winning, industry-recognized experts in the fields of: Architecture, Interior Design and Engineering</li>
          <li>We know all of our trades personally and select project teams based on both expertise and fit with the client</li>
          <li>We warranty our work</li>
          <li>We have long-standing relationships with realtors and are happy to partner with yours while your search for that perfect property</li>
          <li>Each project has a dedicated Project Manager</li>
        </ul>

        <h3 class="heading heading__tertiary">Our Strengths</h3>
        <ul>
          <li>We listen seeking to understand the vision our clients have for their projects.</li>
          <li>We are conceptual thinkers with an eye for both design, and detail.</li>
          <li>We are analytical and tactical, able to turn a client’s vision into an executable plan.</li>
          <li>We spend our clients’ money as if it were our own, weighing “wish lists” against budgets to get the best return on their investment.</li>
          <li>We are always accessible and responsive, via site visits, telephone, text, e-mail and social media.</li>
        </ul>

        <h3 class="heading heading__tertiary">Our Core Values</h3>
        <ul>
          <li>Integrity – It is important that our clients think of us as trustworthy, with strong moral principles.</li>
          <li>Transparency – We believe that our clients should know the who/what/when/how/why of their project.</li>
          <li>Quality – if it’s not good enough for our home or business, it’s not good enough for yours.</li>
          <li>Client Satisfaction – it is not enough for us to complete a client’s project on time and on budget. It is critical that our clients are happy with the finished product, as well as the process.</li>
        </ul>

      </div>
      <div class="col-1-of-3">
        <?php get_sidebar(); ?>
      </div>
    </div>

  </main>




<?php get_footer(); ?>
