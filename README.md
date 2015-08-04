Installation

 - With Symfony installed, clone the project onto your local machine with the command:

 $ git clone https://github.com/treindle/github_commits.git

 - Navigate into the project folder and run:

 $ php app/console server:run

 - In your browser, navigate to:

 http://localhost:8000/

* If Symfony is not installed, navigate to:

http://symfony.com/doc/current/book/installation.html

Compatible with both Mac and PC.

Note: You may run into error message: 

"[Symfony\Component\Debug\Exception\ContextErrorException]
  Warning: date_default_timezone_get(): It is not safe to rely on the system's timezone
   settings. You are *required* to use the date.timezone setting or the date_default_ti
  mezone_set() function. In case you used any of those methods and you are still gettin
  g this warning, you most likely misspelled the timezone identifier. We selected the t
  imezone 'UTC' for now, but please set date.timezone to select your timezone."

Solution: 
  - Open your app/AppKernal.php file and add the code: 

      public function init()
    {
        date_default_timezone_set( 'America/Los_Angeles' ); // or your corresponding timezone
        parent::init();
    }

** This code should be placed within:

class AppKernel extends Kernel
{

Example: 

class AppKernel extends Kernel
{

// =========Setting timezone=========
    public function init() 
    {
        date_default_timezone_set( 'America/Los_Angeles' );
        parent::init();
    }
// =========Setting timezone=========
  
    public function registerBundles()
    {
