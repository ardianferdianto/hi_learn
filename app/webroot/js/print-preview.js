
jQuery(document).ready(function() {
  PrintPreview.init();
});
/**
 * Print preview module
 */
PrintPreview = function() {
  /**
   * Dom element of main css
   *
   * @var jQuery
   */
  var css_main;
  /**
   * Dom element of theme css
   *
   * @var jQuery
   */
  //var css_theme;
  /**
   * Dom element of css preview
   *
   * @var jQuery
   */
  var css_print_preview;
  
  // Return value
  return {
    
    /**
     * Initialize print preview behavior
     *
     * @param void
     * @return null
     */
    init : function() {
      jQuery('#print_button').click(function(e) {
        PrintPreview.open();
        e.stopPropagation();
        return false;
      });
      
      jQuery('#print-preview-header #print_preview_close').click(function() {
        PrintPreview.close();
        return false;
      });
      
      jQuery('#print-preview-header #print_preview_print').click(function() {
        window.print();
        return false;
      });
      
      css_main = jQuery('#baseCSS');
      //css_theme = jQuery('#style_theme_css');
      css_print_preview = jQuery('#previewCSS');
    },
    
    /**
     * Show print preview view
     *
     * @param void
     * @return null
     */
    open : function() {
        css_main.attr('disabled', true);
        //css_theme.attr('disabled', true);
        
        if (jQuery.browser.msie == true) {
          jQuery('#previewCSS').each(function () {
            // please don't ask me why i did this stupendity
            this.disabled = false;
            this.disabled = true;
            this.disabled = false;
          });
        } else {
          jQuery('#previewCSS').attr('rel','stylesheet').each(function () {
            this.disabled = false;
          });
        } // if
    },

    /**
     * Close print preview view
     *
     * @param void
     * @return null
     */
    close : function() {
        css_main.attr('disabled', false);
        //css_theme.attr('disabled', false);
        if (jQuery.browser.msie == true) {
          css_print_preview.each(function () {
            // please don't ask me why i did this stupendity
            this.disabled = true;
            this.disabled = false;
            this.disabled = true;
          });
        } else {
          css_print_preview.attr('rel','stylesheet').each(function () {
            this.disabled = true;
          });
        } // if
    }
    
  };
  
}();