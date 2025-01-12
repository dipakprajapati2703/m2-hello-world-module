# Magento 2 sample module

**Magento 2 Module development** or **Magento 2 Hello World Simple Module**. **MageDip** - are wring about a topic that introduces how to create a simple **Hello World module in Magento 2**.
As you know, the module is a  directory that contains `blocks, controllers, models, helper`, etc - that are related to a specific business features. In Magento 2, modules will be live in `app/code` directory of a Magento installation, with this format: `app/code/<Vendor>/<ModuleName>`. Now we will follow this steps to create a simple module which work on Magento 2 and display `Hello World`.


## Magento 2 Hello World module by magedip.com

### Step 1. Create a directory for the custom module.

In this module, we will use `MageDip` for Vendor name and `Helloworld` for ModuleName. So we need to make this folder:
`app/code/MageDip/Helloworld`

### Step 2. Download hello world module

Please downalod this module from GitHub. [Download here](https://github.com/dipakprajapati2703/m2-hello-world-module/archive/refs/heads/master.zip).


### Step 3. Extract it to `app/code/MageDip/Helloworld`directory


### Step 4. Enable the module

Before enable the module, we will check to make sure Magento has recognize our module or not by enter the following at the command line:

~~~
php bin/magento module:status
~~~

If you follow above step, you will see this in the result:

~~~
List of disabled modules:
MageDip_Helloworld
~~~

This means the module has recognized by the system but it is still disabled. Run this command to enable it:

~~~
php bin/magento module:enable MageDip_Helloworld
~~~

The module has enabled successfully if you saw this result:

~~~
The following modules has been enabled:
- MageDip_Helloworld
~~~


Now you can check under `Stores -> Configuration -> Advanced -> Advanced` that the module is present.

### Step 5. Run Magento commands.

This’s the first time you enable this module so Magento require to check and upgrade module database. We need to run this comment:

~~~
php bin/magento setup:upgrade
php bin/magento setup:di:compile
~~~

### Step 6. Access hellow world page in browser .

In the Magento system, a request URL has the following format:

~~~
http://yourdomain.com/<router_name>/<controller_name>/<action_name>
~~~


~~~
http://yourdomain.com/helloworld
~~~

If you have followed all above steps, you will see `Hello World` when open the url `http://yourdomain.com/helloworld`
