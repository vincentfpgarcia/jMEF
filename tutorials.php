<?php
    $title = "Tutorials";
    include "header.txt";
?>


				
				
	<h1>Tutorial 1: Bregman soft clustering</h1>

	
	<p>
	This tutorial reports the experiment  proposed by Banerjee et al. in [5].
	We create three 1-dimensional datasets of 1000 sample each, based on mixture models
	of Gaussian, Poisson and Binomial distributions, respectively. All the mixture models had three
	components with means centered at 10, 20 and 40, respectively. The standard deviation <i>s</i> of
	the Gaussian densities was set to 5 and the number of trials <i>N</i> of the Binomial distribution was set
	to 100 so as to make the three models somewhat similar to each other, in the sense that the variance
	is approximately the same for all three models.
	For each dataset, we estimate the parameters of three mixture models of Gaussian, Poisson and Binomial 
	distributions using the proposed Bregman soft clustering implementation.
	The quality of the clustering was measured in terms of the normalized <a href="http://en.wikipedia.org/wiki/Mutual_information">mutual information</a> (Strehl and Ghosh, 2002)
	between the predicted clusters and original clusters (based on the actual generating mixture component).
	The results were averaged over 100 trials.
    <br/><br/>
    This tutorial is available on <a href="https://github.com/vincentfpgarcia/jMEF">github</a>.
	</p>
	
	
	<h1>Tutorial 2: Parameter estimation of a mixture of Gaussian</h1>
	
	<p>
	This tutorial consists in the following steps:
	</p>
	<ol>

		<li>We define a mixture <i>f</i> of univariate Gaussians of <i>n</i> components (e.g. <i>n=3</i>).</li>

		<li>We draw <i>m</i> points from <i>f</i> (e.g. <i>m=1000</i>).</li>

		<li>We estimate the parameters of a mixture <i>f<sub>1</sub></i> of univariate Gaussians of <i>n</i> components using a classical expectation-maximization (EM) algorithm.</li>

		<li>We estimate the parameters of a mixture <i>f<sub>2</sub></i> of univariate Gaussians of <i>n</i> components using the Bregman soft clustering implementation (based on the duality of regular exponential families with regular Bregman divergences).</li>

	</ol>
	<p>
	We then check that the estimated mixtures <i>f<sub>1</sub></i> and <i>f<sub>2</sub></i> are similar.
    <br/><br/>
    This tutorial is available on <a href="https://github.com/vincentfpgarcia/jMEF">github</a>.
    </p>
	
	
	<h1>Tutorial 3: Mixture model simplification</h1>
	
	<p>
	This tutorial consists in the following steps:
	</p>
	<ol>
		<li>Read an image file.</li>

		<li>
			Load the correponding mixture of Gaussians (depending on the image and on the desired  number number of components <i>n</i>) from a file.
			If the mixture doesn't exist yet, the mixture is estimated from the pixels of the image using Bregman soft clustering,
			and the mixture is saved in an output file.
		</li>
		<li>Compute the image segmentation from the initial mixture model and save the segmentation result in an output file.</li>
		<li>Simplify the mixture model in a mixture of <i>m</i> components.</li>
		<li>Compute the corresponding image segmentation and save the segmentation result in an output file.</li>

	</ol>
	<p>
    This tutorial is available on <a href="https://github.com/vincentfpgarcia/jMEF">github</a>.
	</p>
	
	<br/><br/>
	<table>

		<caption>Fig. 1 - Application of mixture model simplification to image segmentation.</caption>
		<tr>
			<td><img src="images/Baboon_Simp_032_001.png" alt="Baboon" /></td>
			<td><img src="images/Baboon_Simp_032_002.png" alt="Baboon" /></td>
			<td><img src="images/Baboon_Simp_032_004.png" alt="Baboon" /></td>
			<td><img src="images/Baboon_Simp_032_008.png" alt="Baboon" /></td>
			<td><img src="images/Baboon_Simp_032_016.png" alt="Baboon" /></td>
			<td><img src="images/Baboon_Simp_032_032.png" alt="Baboon" /></td>
		</tr>
		<tr>
			<td><i>m</i>=1</td>
			<td><i>m</i>=2</td>
			<td><i>m</i>=4</td>

			<td><i>m</i>=8</td>

			<td><i>m</i>=16</td>
			<td><i>m</i>=32</td>
		</tr>
	</table>

	
	
	<h1>Tutorial 4: Hierarchical mixture models</h1>
	
	<p>

	This tutorial consists in the following steps:
	</p>
	<ol>
		<li>Read an image file.</li>
		<li>
			Load the correponding mixture of Gaussians (depending on the image and on the  desired  number of components <i>n</i>) from a file.
			If the mixture doesn't exist yet, the mixture is estimated from the RGB pixels of the image using Bregman soft clustering,
			and the mixture is saved in an output file.
		</li>

		<li>Compute the image segmentation from the initial mixture model and save the segmentation in an output file.</li>

		<li>Compute a hierachical mixture model from the initial mixture model.</li>
		<li>Extract a simpler mixture model of <i>m</i> components from the hierachical mixture model.</li>
		<li>Compute the corresponding image segmentation and save the segmentation result in an output file.</li>
	</ol>

	<p>
		Note that the hierachical mixture model allows to automatically extract the <i>optimal</i> number of components in the mixture model.
		To do this, use the method <code>getOptimalMixtureModel(t)</code> instead of <code>getPrecision(m)</code> in the tutorial.
        <br/><br/>
        This tutorial is available on <a href="https://github.com/vincentfpgarcia/jMEF">github</a>.
	</p>

	
	<br/><br/>
	<table>
		<caption>Fig. 2 - Application of hierarchical mixture models to image segmentation.</caption>
		<tr>
			<td><img src="images/Lena_Hier_Sym_032_001.png" alt="Lena" /></td>
			<td><img src="images/Lena_Hier_Sym_032_002.png" alt="Lena" /></td>
			<td><img src="images/Lena_Hier_Sym_032_004.png" alt="Lena" /></td>
			<td><img src="images/Lena_Hier_Sym_032_008.png" alt="Lena" /></td>
			<td><img src="images/Lena_Hier_Sym_032_016.png" alt="Lena" /></td>
			<td><img src="images/Lena_Hier_Sym_032_032.png" alt="Lena" /></td>
		</tr>
		<tr>
			<td><i>m</i>=1</td>

			<td><i>m</i>=2</td>

			<td><i>m</i>=4</td>
			<td><i>m</i>=8</td>
			<td><i>m</i>=16</td>
			<td><i>m</i>=32</td>

		</tr>
	</table>				
	
	<h1>Tutorial 5: Statistical images</h1>
	
	<p>
	For this tutorial, we consider an input image as a set of pixels in a 5-dimensional space (color information RGB + position information XY).
	The mixture of Gaussians <i>f</i> is learnt from the set of pixels using the Bregman soft clustering algorithm. Then, we create two images (see Fig.3):
	</p>
	<ol>
		<li>Each Gaussian is represented by an ellipse illustrating the mean (color + position) and the variance-covariance matrix (ellipse shape) (see row 2, Fig. 3).</li>
		<li>Draw random points from <i>f</i> until at least 20 points per pixels have been drawn. Then, the color value of the statistical image pixel
		at the position <i>(X,Y)</i> is the average color value of the drawn points at the same position (see row 3, Fig. 3).</li>
	</ol>
	<p>
	The proposed tutorial shows that the image structure can be captured into a mixture of Gaussians. The image is then represented by a small
	set of parameters (in comparison to the number of pixels) which is well adapted to applications such as color <a href="http://en.wikipedia.org/wiki/Image_retrieval" class="aLink">image retrieval</a>. Considering an
	input image represented by its mixture of Gaussians, it is then trivial to retrieve, in a image database, a set of images have a similar color organization.
    <br/><br/>
    This tutorial is available on <a href="https://github.com/vincentfpgarcia/jMEF">github</a>.
    </p>
	
	
	<br/><br/>
	<table>
		<caption>Fig. 3 - Statistical images.</caption>
		<tr>
			<td>Original<br/>images</td>
			<td><img src="images/Baboon.png" alt="Lena" /></td>
			<td><img src="images/Lena.png" alt="Lena" /></td>
			<td><img src="images/Shanty.png" alt="Lena" /></td>
			<td><img src="images/Colormap.png" alt="Lena" /></td>
		</tr>
		<tr>
			<td>Gaussian<br/>representation</td>
			<td><img src="images/S_Baboon_ell_032.png" alt="Lena" /></td>
			<td><img src="images/S_Lena_ell_032.png" alt="Lena" /></td>
			<td><img src="images/S_Shanty_ell_032.png" alt="Lena" /></td>
			<td><img src="images/S_Colormap_ell_032.png" alt="Lena" /></td>
		</tr>
		<tr>
			<td>Statistical<br/>images</td>
			<td><img src="images/S_Baboon_dist_032.png" alt="Lena" /></td>
			<td><img src="images/S_Lena_dist_032.png" alt="Lena" /></td>
			<td><img src="images/S_Shanty_dist_032.png" alt="Lena" /></td>
			<td><img src="images/S_Colormap_dist_032.png" alt="Lena" /></td>
		</tr>
	</table>

<?php
    include "footer.txt";
?>