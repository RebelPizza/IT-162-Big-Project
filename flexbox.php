<?php include "includes/header.php"?>
  <main class="wrapper">
    <section>
      <br>
      <h2>Flexbox</h2>
      <br>
        <p>Before 2017, developers have used different elements like floats and positioning for the layout of their websites.
       These elements were cross browser-compatible tools but they can be limiting and difficult.
       For example, centering a content or creating an equal amount of space for columns was an everyday task that frustrated most developers.
       This was in the past and now we have the flexible box module, mostly known as flexbox.
       Flexbox is a single-dimensional layout model which means it will deal with layout one at a time such as laying items in rows or columns. </p>
      <br>
        <p>Flexbox can adjust the size of the items within the containers to fill and shrink as desired for device sizes and a better visual experience.
      It can support more complex or extensive web site design compared to more basic methods of applying “block” and “inline” elements.
      In the container that uses flex properties, there are different elements to direct the flow.
      There are two axes in flex-container and they are called the main axis and the cross axis.
      The main axis is based on the direction defined as flex-direction, and the cross axis is perpendicular to the main. </p>
          <br>

        <p>Contrary to prior styling options in CSS, there are more options to order the direction in flexbox.
       Even though the flexbox is one dimensional, we can wrap flex items using multi-line as a new flex container.
       <i>[1] Flex-flow, This is a shorthand for the flex-direction and flex-wrap properties, which together define the flex container’s main and cross axes the default value is row no wrap.</i>
       If you’d like a more targeted approach, we can use properties such as flex-grow, flex-shrink, and flex-basis.
       As the name suggests, these can change the size of your container and the flex-basis is the limiting value. </p>
         <br>
        <p><i>[2]A key feature of flexbox is the ability to align and justify items on the main- and cross-axes, and to distribute space between flex items.</i>
      To apply these rules we can use align-items and justify-content. Align-items are used on the cross axis and justify-content is used on the main axis.
      Both properties use, flex-start and flex-end to set a limit. For the spacing in the flexbox, there are elements such as space-between, space-around, and space-evenly.
      Created as a solution for previous struggles, flexbox offers flexible space distribution and improved alignment options for a more efficient way to alter the layout.
      Depending on your needs, all of these properties can be an efficient tool for your next web design.</p>
    </section>
  </main>
  <section>
    <h3>Work Cited</h3>
    <ul>
      <li>
        <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">
           Coyier, Chris.
           “A Complete Guide to Flexbox: CSS-Tricks.”
           June, 2020</a>
      </li>
      <li>
        <a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox#Why_Flexbox">
          Mills, Chris David.
          “Flexbox.”
          MDN Web Docs, 2020</a>
      </li>
      <li>
        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">
          Fuji, M. “Basic Concepts of Flexbox.”
          MDN Web Docs, 2020</a>
      </li>
    </ul>
  </section>

<?php include "includes/footer.php"?>
