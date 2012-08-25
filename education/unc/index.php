<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../../include/style heads.php'?>
<title>University of North Carolina - benrobjoh.com</title>
<?php include '../../include/analytics.php'?>
</head>

<body>
<?php include '../../include/header.php'?>
<div class="box">
	<h1 class="center">University of North Carolina at Chapel Hill</h1>
	<h2>Academics</h2>
	<ul><li><b>MS Economics</b>, December 2011</li>
	<ul><li>Master's Thesis: <em><a href="http://benrobjoh.com/education/unc/Student%20Debt.pdf" onClick = "_gaq.push(['_trackEvent', 'Downloads', 'PDF', 'Student Debt: Who Borrows?']);">Student Debt: Who Borrows?</a></em>, <span id="debtabstractlink" class="abstractlink" onClick = "_gaq.push(['_trackEvent', 'View', 'Abstract', 'Student Debt: Who Borrows?']);">Abstract</span></li>
	<p id="debtabstract" class="abstract">
		This paper uses a selection model to investigate what characteristics of students affect the probability and amount of student debt. While most previous work in the area of student debt examines the effects of student debt on schooling and employment decisions, this paper looks at the demographic, financial, and psychological factors that determine whether a student uses debt to finance his education. The main findings are that increased savings does not decrease the probability or amount of student debt accrued and that increased family income decreases the probability of student debt, but increases the average amount of debt, given that the student has some debt.
	</p>
	<li>Health Economics Paper: <em><a href="http://benrobjoh.com/education/unc/Disability%20Insurance.pdf" onClick = "_gaq.push(['_trackEvent', 'Downloads', 'PDF', 'Disability Insurance']);">Employment and Disability Insurance</a></em>, <span id="disabilityabstractlink" class="abstractlink" onClick = "_gaq.push(['_trackEvent', 'View', 'Abstract', 'Disability Insurance']);">Abstract</span></li>
	<p id="disabilityabstract" class="abstract">
		When an individual becomes disabled, he faces a decision whether to continue working or to apply for disability benefits through Social Security Disability Insurance (SSDI). The indi- vidual must consider tradeoffs between continuing to work and applying for SSDI benefits. If the individual continues to work, he might make his disability worse. If he applies for dis- ability benefits, he must quit his job, forgoing his wages and losing his accumulated tenure with his employer. He also faces the uncertainty of whether his SSDI application will be approved. This paper models the disabled individual's decision-making process.
	</p>
	<li>Microeconometrics Paper: <em><a href="http://benrobjoh.com/education/unc/Religion%20and%20Philanthropy.pdf" onClick = "_gaq.push(['_trackEvent', 'Downloads', 'PDF', 'Religion and Philanthropy']);">Religion and Philanthropy</a></em>, <span id="philanthropyabstractlink" class="abstractlink" onClick = "_gaq.push(['_trackEvent', 'View', 'Abstract', 'Religion and Philanthropy']);">Abstract</span></li>
	<p id="philanthropyabstract" class="abstract">
		This paper uses a selection model and a Tobit model to investigate the effects of religion on the probability and amount of charitable donations. The main findings from the selection model are that being Catholic or Protestant make a family more likely to donate to charity than people who do not identify with a religion. Protestants, on average, donate more money to charity than people who do not identify with a religion. The Tobit model finds that Catholics, Jews, Protestants, and non-Christians give significantly more money to charity than non-religious people.
	</p>
	<li>Empirical Industrial Organization Paper: <em><a href="http://benrobjoh.com/education/unc/College%20Pricing.pdf" onClick = "_gaq.push(['_trackEvent', 'Downloads', 'PDF', 'College Pricing']);">Price-Setting by Colleges</a></em>, <span id="collegeabstractlink" class="abstractlink" onClick = "_gaq.push(['_trackEvent', 'View', 'Abstract', 'College Pricing']);">Abstract</span></li>
	<p id="collegeabstract" class="abstract">
		Colleges in the United States price discriminate based on student characteristics such as ability and income. This paper develops a model of college pricing in which colleges maximize their prestige. Several policy experiments are considered in which the college loses the ability to price discriminate at all or to price discriminate with respect to income.
	</p>
	</ul>
	</ul>
	<h2>Teaching</h2>
	<ul>
		<li><b>Econ 410 Intermediate Microeconomic Theory</b>, spring 2012: ran weekly review sessions to answer student questions, graded homework and exams for a 500-student class</li>
		<li><b>Econ 101 Introduction to Economics</b>, fall 2011: Taught three recitation sections, held office hours, created exam questions, graded exams, facilitated logistics associated with running a 400-student class</li>
		<li><b>Econ 460 Economic Development</b>, spring 2011: Graded homework</li>
		<li><b>Econ 423 Financial Markets</b>, fall 2010: Graded homework and exams, graded weekly reports associated with stock market investment project</li>
	</ul>
	<h2>Courses</h2>
	<ul>
		<li>Econ 700 Quantitative Techniques</li>
		<li>Econ 710 Advanced Microeconomic Theory I: Choice theory</li>
		<li>Econ 711 Advanced Microeconomic Theory II: Game theory</li>
		<li>Econ 720 Advanced Macroeconomic Theory I: Growth theory</li>
		<li>Econ 721 Advanced Macroeconomic Theory II: Monetary macroeconomics</li>
		<li>Econ 770 Introduction to Econometrics: Probability</li>
		<li>Econ 771 Econometrics: Applied econometrics, data analysis, Stata</li>
		<li>Econ 850 Health Economics: Structural health models</li>
		<li>Econ 870 Advanced Econometrics: Theoretical econometrics, MATLAB</li>
		<li>Econ 871 Microeconometrics: Applied econometrics, data analysis</li>
		<li>Econ 880 Labor Economics I: Reduced-form labor economics, data analysis, Stata</li>
		<li>Econ 881 Labor Economics II: Structural labor economics, model estimation in MATLAB</li>
		<li>Econ 890 Quantitative Methods</li>
		<li>Econ 890 Empirical Industrial Organization: Survey of empirical industrial organization literature, MATLAB</li>
	</ul>
	<img src="UNC%20Graduation.jpg" alt="UNC Graduation Photo" height="460" width="750" class="center"/>
</div>

<script>
$(function() {
				$('#debtabstractlink').click(function() {
						$('#debtabstract').slideToggle(1000)
				});
				$('#disabilityabstractlink').click(function() {
						$('#disabilityabstract').slideToggle(1000)
				});
				$('#philanthropyabstractlink').click(function() {
						$('#philanthropyabstract').slideToggle(1000)
				});
				$('#collegeabstractlink').click(function() {
						$('#collegeabstract').slideToggle(1000)
				});
			});
</script>

<?php include '../../include/footer.php'?>
</body>
</html>