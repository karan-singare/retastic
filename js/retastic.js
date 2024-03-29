//javascript function
jQuery(document).ready(function($) {

  /**
   * Adding styles to the fluentform (Form on the homepage)
   */
  // Form Wrapper


  $('div[class*="fluentform_wrapper_"]').addClass('book');
  const fluentform_wrapper_content = $('div[class*="fluentform_wrapper_"]').addClass('book').html();
  const new_fluentform_wrapper_content = "<div class='book__form'>" + fluentform_wrapper_content + "</div>";
  $('div[class*="fluentform_wrapper_"]').html(new_fluentform_wrapper_content);

  // inputs
  $('div[class*="fluentform_wrapper_"] form .ff-el-group').addClass('form__group');
  $('div[class*="fluentform_wrapper_"] form input').addClass('form__input');
  $('div[class*="fluentform_wrapper_"] form input').removeClass('ff-el-form-control');

  $('div[class*="fluentform_wrapper_"] form select').addClass('form__input');
  $('div[class*="fluentform_wrapper_"] form select').removeClass('ff-el-form-control');

  $('div[class*="fluentform_wrapper_"] form textarea').addClass('form__input');
  $('div[class*="fluentform_wrapper_"] form textarea').removeClass('ff-el-form-control');


  // Submit button
  $('div[class*="fluentform_wrapper_"] form button').removeClass('ff-btn ff-btn-submit ff-btn-md');
  $('div[class*="fluentform_wrapper_"] form button').addClass('btn btn--green');

  // Inserting the heading the fluent form
  const form_heading = `
    <div class="u-center-text u-margin-bottom-medium">
      <h2 class="heading__secondary">
        Concierge Inquiries
      </h2>
    </div>
  `;
  $('div[class*="fluentform_wrapper_1"] form').prepend(form_heading);

  /**
   * Adding custom classes for content of the service pages
   */
  $('.page .service .content h2').addClass('heading__secondary');
  $('.service .content h2').addClass('heading__secondary');


  if (location.pathname === '/' || location.pathname === '/contact-us/') {

  } else {
    $('div[class*="fluentform_wrapper_"]').removeClass('book').addClass('sidebar-form');
    const fluentform_wrapper_content = $('div[class*="fluentform_wrapper_"] .book__form').html();
    $('div[class*="fluentform_wrapper_"]').html(fluentform_wrapper_content);
  }

  /**
   * Automatic sliding of the slides
   */
  setInterval(() => {
    const inputs = $('.slider input[type="radio"]');
    for (let i = 0; i < inputs.length; i++) {
      if (inputs[i].checked === true) {
        inputs[i].checked = false;

        if (i < inputs.length-1) {
          inputs[i+1].checked = true;
        } else {
          inputs[0].checked = true;
        }
        break;
      }
    }
  }, 4000);

  /**
   * Creating the banner for single blog posts
   */
  $('.single-post .slider').html($('#banner-content').html())

});
