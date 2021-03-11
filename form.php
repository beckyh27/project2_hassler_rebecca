<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'beckyjhassler.com' // Put you mail domain here
	,
	'Portfolio of Becky Hassler' // Put your site name / form name here
	,
	'rebeccahassler@ufl.edu' // Where will the form notification be sent?
	,
	'noreply@beckyjhassler.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
