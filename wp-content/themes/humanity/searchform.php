<!-- **Searchform** -->
<?php $search_text = empty($_GET['s']) ? __("Enter text to search",'dt_themes') : get_search_query(); ?> 
<form method="get" class="search_form" action="<?php echo home_url();?>">
    <input id="s" name="s" type="text" />

	   <input id="btnsearch" type="button" value="GO"  />
        <input id="search-submit" type="submit"  name="search-submit"  />
</form><!-- **Searchform - End** --> 
