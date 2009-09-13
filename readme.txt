YouTube video embed filter
--------------------------

Make it easy to embed youtube videos into page content.

To add a video to a page:
    Edit the page and add a piece of text like this:
    [[youtube:video url]]
    eg [[youtube:http://www.youtube.com/v/fYTJ9v2vsaE]]

Will accept the url as either the url from your browser
    eg [[youtube:http://www.youtube.com/watch?v=fYTJ9v2vsaE&mode=related&search=]]
    or the embed url
    [[youtube:http://www.youtube.com/v/fYTJ9v2vsaE]]

To change the size of the image, include the following in your sites css:
eg
.youtube, .youtube embed{
  width:290px;
  height:100px;
}
