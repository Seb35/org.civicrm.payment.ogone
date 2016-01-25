This CiviCRM extension add a support for the Ogone payment service, now integrated into the group [Ingenico](http://www.ingenico.com).

To install the extension
------------------------

1. Clone the repository in your extensions folder.

    $ git clone https://github.com/cray146/org.civicrm.payment.ogone.git
    or this one, a bit more recent,
    $ git clone https://github.com/Seb35/org.civicrm.payment.ogone.git

2. Make a symbolic link in <civicrm root>/packages/OgoneUtils.php to OgoneUtils.php
3. Make a symbolic link in <civicrm root>/extern/OgoneNotify.php to OgoneNotify.php
4. Go to Administer > System Settings > Directories and configure CiviCRM Extensions Directory.
5. Go to Administer > System Settings > Resource URLs and configure Extension Resource URL.
6. Go to Administer > Manage Extensions. Click Refresh to update the overview of available extensions. Click Install to install the Ogone Payment Processor.


To configure the Ogone payment processor
----------------------------------------

1. Go to Administer > System Settings > Payment Processors and click Add Payment Processor
2. Fill out the New Payment Processor form. Select Ogone for Payment Processor Type.
3. You will have two similar parameter sets: one for real transactions (production) and one for tests.
4. Write down your PSPID (your Ogone ID), the same SHA-IN and SHA-OUT passphrases as in your Ogone backoffice ("technical information" tab; you should use different passphrases between your production and test environments).
5. The website URL is (as of beginning of 2016):

    * Production: https://secure.ogone.com/ncol/prod/orderstandard.asp
    * Test: https://secure.ogone.com/ncol/test/orderstandard.asp


To configure the Ogone Merchant Account
---------------------------------------

1. Login on Ogone with your merchant account. The production and test environments are separated:

    * Production: https://secure.ogone.com/Ncol/Prod/BackOffice/login/index
    * Test: https://secure.ogone.com/Ncol/Test/BackOffice/login/index

2. Go to tab Configuration, then the tab Technical informations.
3. Go to tab Global security parameters.

    * Set Hash algorithm to SHA-1.

4. Go to tab Data and Origin verification.

    * Set up the URL of the merchant page containing the payment form that will call the page: orderstandard.asp, with your origin website, e.g. https://crm.example.org
    * Set up the SHA-IN passphrase.

5. Go to tab Transaction feedback.

    * Check 'I would like to receive transaction feedback parameters on redirection URLs.'
    * Set up SHA-OUT passphrase.
