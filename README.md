This is a fun project where I briefly extended the functionality of <a href="https://github.com/amadeuspzs/TODO/tree/NSS-TODO">NSS-TODO-List v 1.1</a> made by "amadeus.maclab.org".


<h3>Setup:</h3>

In order to install the NSS-TODO-List (extended) application:
<ul>
<li>Make sure that you have a server installed that can serve PHP. Apache would be a good option.</li>
<li>Make sure you have a PHP 5.2.5 or higher installed on your system.</li>
<li><strong>Note:</strong> You can download an installer like XAMPP for the above two requirements.</li>
<li>Start the Apache server if it is not already running. Verify by going to localhost in your browser</li>
<li>Checkout the project and put all its contents in the 'htdocs' (/www) folder of Apache.You may need to mount same via XAMPP</li>
<li><strong>Note:</strong> You may want to explore your file read/write permissions on your local file system.</li>
<li>Go to http://localhost/dotdash-project/index.php (or whatever name you have given to the folder containing all of the project files) and access the application.</li>
</ul>
<h3>Test Cases:</h3>
Write test cases to test various functionalities and features of this app. Imagine you are a QA Lead and how would you go about successfully testing this app. The more scenarios you cover the better coverage you can provide. First test the API call and then test the interface and functionality of this app. Please provide your test cases in plain English and paste them under /test_cases.txt file.

<h4>API Test Cases:</h4>


Note: There can be more than below suggested test cases.
<ul>
<li>Test service status of the API endpoint (only one in this case)</li>
<li>Find how many tasks do not have "category" assigned</li>
<li>Aggregate and print only "task names"</li>
<li>Read API response and print tasks in descending "due date" order</li>
<li>Count and validate the number of tasks</li>
</ul>

<h3>Automation:</h3>
The goal is to use access the fake API call at http://localhost/nss-todo-automation/fake-API-call.php and automate above suggested test cases. 
Selenium Webdriver with preferably Python bindings (or any other OO language of your choice). Automate the above test cases in order to test the functional flow through of the application. In particular, we want to test options around creating a todo, assigning categories, modifying/deleting existing todos etc. The application should itself be fairly self-explanatory. Feel free to email us (qa@dotdash.com) with any questions about it. Please use the application first to populate data for API. I would suggest create some dunny tasks.


<h3>Submission instructions:</h3>
Follow the Github standard collaboration procedure. 
<h4>Option A:</h4> You can fork this repository, setup a local branch, push the references (changes) remotely and then ccreate a pull request back to us us. 
<h4>Option B:</h4>  You can be added as a collaborator to this project where you can create your own separate branch and commit changes to it. For second option your Github username handle needs to be authorized by this project owner. 
<h4>Option C:</h4> It is also fine if you already have a personal GitHub repository and you would want to avoid pull requests. Just sumbit the proper link t   hat points to your exercise.

<h3>Resources:</h3>
<ul>
<li>API call for backend data validation: There's a fake API call that outputs JSON of the flat file at http://localhost/nss-todo-automation/fake-API-call.php </li>
<li>Selenium documentation: http://docs.seleniumhq.org/projects/webdriver/ </li>
</ul>



