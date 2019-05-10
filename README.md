# Books-WOU

This can be our notes on what we edit and why

I found a really useful article on how to set up the lamp server.
https://www.linode.com/docs/web-servers/lamp/install-lamp-stack-on-ubuntu-18-04/

I basically followed that step by step and set it all up on a new instance of ubuntu on aws.
Although I suppose no matter how you had an instance of Linux running this would work but we might want to demo it on an aws instance just for convenience of knowing its running on their servers.

This video is also pretty useful to briefly explain how github works.
https://www.youtube.com/watch?v=0fKg7e37bQE

Aidan, May 10 2019
Alright, this thing's pretty much ready for sprint 2 review. Fixed some things, half-broke some other ones. Sidebar's fixed now so I could force it to actually act like a sidebar. Downside is the site's
no longer responsive. Responsive as in, flexible, not as in it's frozen. Anyways, I'll figure something out for that later, it's just as CSS problem but it was actually making it harder to generate
the book offer entries with PHP. Complicated, probably need to overhaul the stylesheet at some point. Few of the other pages that I've marked as depreciated might be a little screwed up looking now, but
if you want to see them again just wrap all the non-sidebar material in <main> a large main tag.

Cut out links that don't work, they're commented out on all functioning pages. Make new Listing actually hits a MySQL Server now, gonna need to work out how we standardize THAT so that we can all have our own
functioning test environments rather than having to all share an AWS environment. There'd be an advantage in that but I can't see that going without complications. The "View All Subjects" hyperlink now hits
the php file I wrote, pulls directly from the MySQL system. Tried to make it look halfway acceptable. No bad input handling though, not yet. Wanted to make sure I could get everything else done first.

Linked up the new contact page, cleaned up the damage I caused with the stylesheet changes by adding <main> tags. That should about cover it.
