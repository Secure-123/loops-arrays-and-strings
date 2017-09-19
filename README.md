# Loops, Arrays and Strings

1. Open *basic_concepts.php*. Answer the questions in comments in this file.
2. Have a look at *band_form.html* and *display_bands.php*. Write some PHP code so that when the user enters selects a genre and submits the form, the details for all the bands that match the chosen genre should be displayed.
   * Add a text box to the form so that the user can enter a search term for the location of the band as well as selecting the genre e.g. a user might enter 'New York' and select 'hip-hop', the search results should then present 'The Wu-Tang Clan'. Have a look at using the strpos() (http://php.net/manual/en/function.strpos.php) function to help you search.
3. Open *chk_form.php*. This a quiz where users have to select (multiple) correct answers from a list. Write some PHP code that will test the answers and tell the user if they have answered correctly. Here are some hints to help you:
   * The selected choices should be accessible as a PHP array (have a good look at the names of the checkboxes in chk_form.php). Try using a print_r() or a foreach loop to display what the user has chosen.
   * If you can get this to work, you need to check if the user has answered correctly. This is probably a bit trickier than it first appears. There are a number of ways to do it e.g. sorting and then comparing the arrays using an if statement.
   * The correct answers are: Brazil, Uruguay, England and Argentina
