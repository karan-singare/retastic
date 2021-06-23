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






  $('.navigation__list a').addClass('navigation__link');
});
