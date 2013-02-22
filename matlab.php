<?php
    $title = "jMEF";
    include "header.txt";
?>

			<h1>How to use jMEF in Matlab</h1>

            <p>Using jMEF in Matlab is pretty straightforward although there are a few things that you should care of :</p>

            <ol>
                <li>
                    Make sure that jMEF.jar is in your javaclasspath, then import it.
                    <pre class="code">javaclasspath(<span class="t">'D:\Work\jMEF.jar'</span>);
import <span class="t">jMEF.*</span>;</pre>
                    Now, you can use jMEF in matlab, just try to create a simple GMM
<pre class="code">n=5;
dim=4;
mm=MixtureModel(n);
mm.EF=MultivariateGaussian;

<span class="f">for</span> i=1:n
    mm.weight(i)=1/n;
    mm.param(i) = PVectorMatrix.RandomDistribution(dim);
<span class="f">end</span>
</pre>
                </li>

<li> The java Enum type in Matlab R2009b and previous versions has a well known bug. In order to create an Enum type you have to use the following trick. This example tries to access the Enum type Clustering.CLUSTERING_TYPE which can take 3 values : LEFT_SIDED, RIGHT_SIDED, SYMMETRIC
<pre class="code">
p=Clustering();
classname=p.getClass.getClasses;
MessageTypes = classname(1).getEnumConstants;
</pre>
MessageTypes(1) now contains the Enum LEFT_SIDED, MessageTypes(2) now contains the Enum RIGHT_SIDED and MessageTypes(3) now contains the Enum SYMMETRIC.
You can now call a clustering method with your favorite centroid, for instance :
<pre class="code">
symmetric_centroid=jMEF.Clustering.getCentroid(mm,MessageTypes(3));
</pre>
</li>

<li> Warning: Exponential families can be parametrized in three ways : SOURCE(MU,Sigma), NATURAL and EXPECTATION Parameters. For now, most functions from jMEF support all of the three types, however some of them do not. For instance EF.KLD (Kullback-Leibler Divergence) only accepts SOURCE parameters, and Clustering.Centroid methods only support NATURAL parameters. So when you want to modify or create parameters, or use one of the above functions, please check the doc and use the converting function accordingly (by the way, the type of parameters is also an ENUM so one can reuse the trick above to play with it)
<pre class="code">
<span class="c">% Check my type (NATURAL, SOURCE, OR EXPECTATION)</span>
mm.param(1).type
mm.param(2).type

<span class="c">% The type is SOURCE, I can compute Kullback Leibler between those two.</span>
mm.EF.KLD(mm.param(1),mm.param(2));

<span class="c">% I can also print the values, since it is the famous (MU,SIGMA)=(mean,covariance) Notation </span>
mm.param(1)

<span class="c">% If now, I need to call a centroid function which only supports NATURAL parameters.
% Let us convert the parameters SOURCE->NATURAL </span>
<span class="f">for</span> i=1:n 
    mm.param(i)=mm.EF.Lambda2Theta(mm.param(i));
<span class="f">end</span> 

<span class="c">% Now, I can call my centroid function </span>
symmetric_centroid=jMEF.Clustering.getCentroid(mm,MessageTypes(3));

<span class="c">% The result is in NATURAL paramters too so if you want to print it
% with your favorite (MU,SIGMA) Notation, convert it NATURAL->SOURCE</span>
symmetric_centroid=mm.EF.Theta2Lambda(symmetric_centroid);
</pre>
</li>

            </ol>



            <h1>Demo 1: Estimate a centroid of a GMM</h1>
				
            <p>
                This is a demo of the wrapper, it loads jMEF (make sure you have jMEF.jar and that the javaclasspath is correct).	Then it does some simple operations, creates a random GMM, compute its symmetrized bregman centroid (in this case Kullback-Leibler), then plot it.
			
            <br/><br/>
				
            <a href="resources/jMEF.Matlab.Demo1.m">Download Demo 1 (.m)</a>
            </p>

            <table>
                <caption>Fig. 1 - Simple matlab demo, a random 2D GMM of 5 components and its symmetrized centroid, in red.</caption>
                <tr><td><img src="images/Matlab_Centroid.png" alt="Centroid" /></td></tr>
            </table>




            <h1>Demo 2 : Estimate a GMM from samples</h1>
            
            <p>A simple demo, it draws 1000 random samples from a GMM and tries to estimate it using BregmanSoftClustering. It requires kmeans (contained in tools.jar).

            <br/><br/>
            
            <a href="resources/jMEF.Matlab.Demo2.m">Download Demo 2 (.m)</a>

            </p>

            <table>
                <caption>Fig. 2 - Draw random samples from a GMM (in blue), and  try to estimate it using BregmanSoftClustering (in red).</caption>
                <tr>
                    <td><img src="images/Matlab_GMM_original.png" alt="" /></td>    
                    <td><img src="images/Matlab_Samples_From_GMM.png" alt="" /></td>
                    <td><img src="images/Matlab_GMM_Form_Samples.png" alt="" /></td>
                </tr>
                <tr>
                    <td>One random GMM</td>
                    <td>1000 samples from this GMM</td>
                    <td>GMM estimated from samples</td>
                </tr>	
            </table>

<pre class="code">>> Kullback Leibler divergence between original and estimated: .040888</pre>

<?php
    include "footer.txt";
?>