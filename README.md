# Books-WOU

This can be our notes on what we edit and why

I found a really useful article on how to set up the lamp server.
https://www.linode.com/docs/web-servers/lamp/install-lamp-stack-on-ubuntu-18-04/

I basically followed that step by step and set it all up on a new instance of ubuntu on aws.
Although I suppose no matter how you had an instance of Linux running this would work but we might want to demo it on an aws instance just for convenience of knowing its running on their servers.

This video is also pretty useful to briefly explain how github works.
https://www.youtube.com/watch?v=0fKg7e37bQE


Aidan - April 18, 2019
* Changed CSS to reduce font size and unnecessary padding of header. Where'd you get this CSS style anyways? Because if this was pulled from somewhere we ought to cite it. Though, it's just a placeholder anyways so I guess that doesn't matter.
* Changed content of index.html, no entries on landing page. Go to Craigslist, their landing page includes a breakdown of what they offer, by category. We can have something similar. Browse by subject, and then a list of subjects, will be one column. Next to it, a column "Browse books being offered by subject". Same deal. That's my idea so far, I think it'd look alright. When the front page of a site like this has product listings, it's generally because there's special offers of some kind.
* Stylesheet moved from inside index.html to external file "style.css". Can now be linked to with the <link> tag found in the header. Standard web development procedure for any reused stylesheet. If you want to add new style rules just for one page, or override ones from the primary style sheet, you can still do that with the <style> tag.
* Minor changes to writing. Got rid of CSS Template in title, made the r in resource in the tagline lowercase. Removed word "footer" from the footer, don't really need it. Added 10 extra pixels of padding given that the footer is currently empty, works a bit better visually.

Notes:
* Should we switch from a sidebar to a horizontal navigation bar? Existing vertical bar is taking up a lot of room. That could be fixed too, just wondering.
* Should add a search bar eventually, and change the "Search for Books" link to an advanced search, where filters are presented.
  I'm aware this is a very basic layout just to get some work done on. But, I thought I'd say something.