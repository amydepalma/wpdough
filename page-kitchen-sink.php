<?php get_header() ?>
<div class="post-grid">
	<h2>Wordpress Styling</h2>


	<h2>Base Styling</h2>
	<p class="notice">This demo page details a select set of elements that are meant to show off Simple.css’s styling, and provide HTML to help you get started easily. If you want a comprehensive demonstration of elements that may or may not be styled by Simple.css, please see <a href="https://test.simplecss.org">our test page</a>.</p>

	<p>This page is a demonstration of the elements that can be formatted using Simple.css. Each section includes a code block on how to include it in your site’s design.</p>

	<p>This may be a little basic for some people, but I wanted the barrier for entry to be as low as possible for this project.</p>

	<h2 id="basic-typography">Basic Typography</h2>

	<p>All the typography of Simple.css uses <code>rem</code> for sizing. This means that accessibility is maintained for those who change their browser font size. The <code>body</code> element has a size of <code>1.15rem</code> which makes all the standard font sizes slightly larger. This equates to <code>18.4px</code> for paragraph text, instead of the standard <code>16px</code>.</p>

	<p>The heading elements also have an increased top margin in order to break blocks of text up better.</p>

	<h1 id="heading-1-3rem">Heading 1 <code>3rem</code></h1>

	<h2 id="heading-2-26rem">Heading 2 <code>2.6rem</code></h2>

	<h3 id="heading-3-2rem">Heading 3 <code>2rem</code></h3>

	<h4 id="heading-4-144rem">Heading 4 <code>1.44rem</code></h4>

	<h5 id="heading-5-115rem">Heading 5 <code>1.15rem</code></h5>

	<h6 id="heading-6-096rem">Heading 6 <code>0.96rem</code></h6>


	<section class="full-width has-green-200-background-color">

		<section class="breakout has-green-400-background-color">
			breakout
			<p>Links are formatted very simply on Simple.css (shock horror). They use the <code>accent</code> CSS variable and are underlined. There is a <code>:hover</code> effect that removes the underline.</p>

			<p>Buttons use the same <code>accent</code> CSS variable for their colour. When hovering, there is an opacity effect.</p>
		</section>
	</section>


	<section class="breakout has-blue-400-background-color">

		<h3 id="links--buttons">Links &amp; Buttons</h3>

		<p>Links are formatted very simply on Simple.css (shock horror). They use the <code>accent</code> CSS variable and are underlined. There is a <code>:hover</code> effect that removes the underline.</p>

		<p>Buttons use the same <code>accent</code> CSS variable for their colour. When hovering, there is an opacity effect.</p>

		<p><a href="https://example.com">I’m a hyperlink</a></p>

		<p><button>I’m a button</button></p>

		<p><a class="button" href="https://example.com">I’m a button with a link</a></p>
	</section>
	<section class="full-width has-blue-200-background-color">
		<h2 id="other-typography-elements">Other typography elements</h2>

		<p>There are a number of other typography elements that you can use with Simple.css. Some of the common ones are:</p>

		<ul>
			<li>All the standard stuff, like <strong>bold</strong>, <em>italic</em> and <u>underlined</u> text.</li>
			<li><mark>Highlighting text</mark> using the <code>mark</code> element.</li>
			<li>Adding <code>inline code</code> using the <code>code</code> element.</li>
			<li>Displaying keyboard commands like <kbd>ALT+F4</kbd> using the <code>kbd</code> element.</li>
		</ul>
	</section>

	<h3 id="lists">Lists</h3>

	<p>We all love a good list, right? I know my wife does!</p>

	<ul>
		<li>Item 1</li>
		<li>Item 2
			<ul>
				<li>Item 1</li>
				<li>Item 2</li>
				<li>Item 3</li>
			</ul>
		</li>
		<li>Item 3</li>
	</ul>

	<ol>
		<li>Do this thing</li>
		<li>Do that thing</li>
		<li>Do the other thing</li>
	</ol>

	<ul class="list-unstyled">
		<li>Unstyled Item 1</li>
		<li>Unstyled Item 2</li>
		<li>Unstyled Item 3</li>
	</ul>

	<h3 id="blockquotes">Blockquotes</h3>

	<p>Sometimes you may want to quote someone else in your HTML. For this we use the <code>blockquote</code> element. Here’s what a quote looks like with Simple.css:</p>

	<blockquote>
		<p>Friends don’t spy; true friendship is about privacy, too.</p>

		<p><cite>– Stephen King</cite></p>
	</blockquote>

	<h3 id="code-blocks">Code blocks</h3>

	<p>Code blocks are different from the inline <code>code</code> element. Code blocks are used when you want to display a block of code, like this:</p>

	<h2 id="other-html-elements">Other HTML elements</h2>

	<p>There are other HTML elements that are formatted in Simple.css. If you think there should be more added, please <a href="https://github.com/kevquirk/simple.css/issues">log an issue on Github</a></p>

	<h3 id="notice-box">Notice box</h3>

	<p class="notice">This is a notice box. It’s useful for calling out snippets of information. Cool, huh?</p>

	<h3 id="aside">Aside</h3>

	<aside>
		<p><b>Aside</b></p>
		<p>This is an <code>aside</code>, it floats to the right and stands out slightly.</p>
	</aside>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<h3 id="article">Article</h3>

	<article>
		<h2>This is an article</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</article>

	<h3 id="section">Section</h3>

	<p>Sections are good for splitting up a page into multiple…sections. 🙃</p>

	<section>
		<h2>This is a section</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</section>

	<h2 id="images">Images</h2>

	<p>In Simple.css, images within the <code>main</code> element are always full width and have rounded edges to them. The <code>figcaption</code> element is also formatted in Simple.css. Here are examples of images with and without a caption:</p>

	<p><img src="/assets/images/dog-ipad.jpg" alt="A dog at an iPad"></p>

	<figure>
		<img alt="This is a black swan" src="/assets/images/goose.jpg">
		<figcaption>This is a black swan</figcaption>
	</figure>

	<h2 id="accordions">Accordions</h2>

	<p>Accordions are cool to play with. They’re especially useful when it comes to things like FAQ pages. Many people invoke JavaScript, or <code>div</code> for life when they use accordions. I don’t really understand why that is when it’s available in plain old HTML:</p>

	<details>
		<summary>Spoiler alert!</summary>
		<p>You smell. 🙂</p>
	</details>

	<h2 id="tables">Tables</h2>

	<p>Like lists, sometimes you may need to add a table to your webpage. In Simple.css tables automatically highlight every other row to make reading easier. Table header text is also bold. Here’s what they look like:</p>

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Number</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Jackie</td>
				<td>012345</td>
			</tr>
			<tr>
				<td>Lucy</td>
				<td>112346</td>
			</tr>
			<tr>
				<td>David</td>
				<td>493029</td>
			</tr>
			<tr>
				<td>Kerry</td>
				<td>395499</td>
			</tr>
			<tr>
				<td>Steve</td>
				<td>002458</td>
			</tr>
		</tbody>
	</table>

	<h2 id="forms">Forms</h2>

	<p>Forms are useful for all kinds of things on webpages. Contact forms, newsletter sign ups etc. Forms also look pretty good on Simple.css:</p>

	<form>
		<p><strong>This is just a test form. It doesn't do anything.</strong></p>
		<p>
			<select>
				<option selected="selected" value="1">Title</option>
				<option value="2">Mr</option>
				<option value="3">Miss</option>
				<option value="4">Mrs</option>
				<option value="5">Other</option>
			</select>
		</p>
		<p>
			<label>First name</label>
			<input type="text" name="first_name">
		</p>
		<p>
			<label>Surname</label>
			<input type="text" name="surname">
		</p>
		<p>
			<label>Email</label>
			<input type="email" name="email" required="">
		</p>
		<p>
			<label>Enquiry type:</label>
			<label><input checked="checked" name="type" type="radio" value="sales"> Sales</label>
			<label><input name="type" type="radio" value="support"> Support</label>
			<label><input name="type" type="radio" value="billing"> Billing</label>
		</p>
		<p>
			<label>Message</label>
			<textarea rows="6"></textarea>
		</p>
		<p>
			<label for="cars">Choose a car:</label>
			<select name="cars" id="cars" multiple="">
				<option value="volvo">Volvo</option>
				<option value="saab">Saab</option>
				<option value="opel">Opel</option>
				<option value="audi">Audi</option>
			</select>
		</p>
		<p>
			<label>
				<input type="checkbox" id="checkbox" value="terms">
				I agree to the <a href="#">terms and conditions</a>
			</label>
		</p>

		<button>Send</button>
		<button type="reset">Reset</button>
		<button disabled="disabled">Disabled</button>
	</form>

</div>
<?php get_footer() ?>