<?php
    $title = "jMEF";
    include "header.txt";
?>

                <h1>What are exponential families?</h1>

				<p>An <a href="http://en.wikipedia.org/wiki/Exponential_family">exponential family</a> is a generic set of probability distributions that admit the following canonical distribution:</p>

                $$
                \normalsize
                p_F(\Theta) = \exp(\langle \Theta, t(x)\rangle - F(\Theta) + k(x) )
                $$

                <p>Exponential families are characterized by the log normalizer function <i>F</i>, and include the following well-known distributions: <i>Gaussian (generic, isotropic Gaussian, diagonal Gaussian, rectified Gaussian or Wald distributions, lognormal), Poisson, Bernoulli, binomial, multinomial, Laplacian, Gamma (incl. chi-squared), Beta, exponential, Wishart, Dirichlet, Rayleigh, probability simplex, negative binomial distribution, Weibull, von Mises, Pareto distributions, skew logistic, etc</i>. All corresponding formula of the canonical decomposition are given in the <a href="doc/annotated.html">documentation</a>.

                <br/><br/>

                Mixtures of exponential families provide a generic framework for handling Gaussian mixture models (GMMs also called MoGs for mixture of Gaussians), mixture of Poisson distributions, and Laplacian mixture models as well.
                </p>



                <h1>What is jMEF?</h1>
				<p>jMEF is a Java cross-platform library developped by <a href="http://www.vincentgarcia.org/">Vincent Garcia</a> and <a href="http://www.lix.polytechnique.fr/%7Enielsen" class="aLink">Frank Nielsen</a>. jMEF allows one to:</p>
				<ul>
					<li>create and manage <a href="http://en.wikipedia.org/wiki/Mixture_model">mixture</a> of <a href="http://en.wikipedia.org/wiki/Exponential_family">exponential families</a> (MEF for short),</li>

					<li>estimate the parameters of a MEF using Bregman soft clustering 
(equivalent by duality to the Expectation-Maximization algorithm),</li>
					<li>simplify MEFs using Bregman hard clustering (k-means algorithm in natural parameter space),</li>
					<li>define a hierachical MEF using Bregman hierarchical clustering,</li>
					<li>automatically retrieve the <i>optimal</i> number of components in the mixture using the hierarchical MEF structure.</li>
				</ul>
				

				

                <h1>Related bibliography</h1>
               
                <ol>
                    <li>
                        Vincent Garcia, Frank Nielsen, and Richard Nock<br/>
                        <a href="resources/Garcia_2009_ACCV.pdf">Levels of details for Gaussian mixture models</a><br/>
                        <i>In Proceedings of the Asian Conference on Computer Vision</i>, Xi'an, China, September 2009
                    </li>

                    <li>
                        Frank Nielsen, and Vincent Garcia<br/>
                        <a href="http://arxiv.org/abs/0911.4863">Statistical exponential families: A digest with flash cards</a><br/>
                        <i>arXiV, http://arxiv.org/abs/0911.4863</i>, November 2009
                    </li>

                    <li>
                        Frank Nielsen, Vincent Garcia, and Richard Nock<br/>
                        <a href="resources/Nielsen_2009_EUSIPCO.pdf">Simplifying Gaussian mixture models via entropic quantization</a><br/>
                        <i>In Proceedings of the European Signal Processing Conference (EUSIPCO)</i>, Glasgow, Scotland, August 2009
                    </li>

                    <li>
                        Frank Nielsen and Richard Nock<br/>
                        <a href="resources/Nielsen_2009_TIT.pdf">Sided and symmetrized Bregman centroids</a><br/>
                        <i>IEEE Transactions on Information Theory</i>, 2009, 55, 2048-2059
                    </li>

                    <li>
                        Frank Nielsen, Jean-Daniel Boissonnat and Richard Nock<br/>
                        <a href="ftp://ftp-sop.inria.fr/geometrica/boissonnat/Papers/bregman.pdf">On Bregman Voronoi diagrams</a><br/>
                        <i>ACM-SIAM Symposium on Data Mining</i>, 2007, 746-755
                    </li>

                    <li>
                        A. Banerjee, S. Merugu, I. Dhillon, and J. Ghosh<br/>
                        <a href="resources/Banerjee_2005_JMLR.pdf">Clustering with Bregman divergences</a><br/>
                        <i>Journal of Machine Learning Research</i>, 2005, 6, 234-245
                    </li>
                </ol>



<?php
    include "footer.txt";
?>