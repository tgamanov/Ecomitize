Simple FAQ extension

On admin side:
Create a standard grid to list FAQs **(‘admin’->"CMS"->"FAQ")**
Create a form with: Question (text), Answer (textarea with editor), Is Active (Yes/No) option
On front side:
Create a page where all questions and answers will be listed as ul-li list **(example.com/faq/list)**
Create a block that will appear on home page and shows random questions and answers on it.
Create A widget that will allow the store admin to be able to add a block to any CMS page or Static block that 
will show a custom list of Questions(i.e. an input field where they can type 1,2,3,10,37, etc).

Dynamic Values

Create a module that will dynamically add new (temporary) data with a value such as "dynamic value" to a product 
that can then be output on the product detail page (view.phtml template) by adding <?php echo 
$product->getCustomAttribute();?>
