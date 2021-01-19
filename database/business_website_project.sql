-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 04:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business_website_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_id` int(11) NOT NULL DEFAULT 1,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `IP` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content_id`, `user_id`, `IP`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '127.0.0.1', 'Both systems can be adapted to the Client’s requirements, i.e. microphones, CD player, MP3 player etc, Equaliser, Effects unit etc.  The above solutions are low cost ‘unbalanced’ audio systems covering numerous audio applications.', 'True', '2021-01-16 10:03:25', '2021-01-18 18:25:12'),
(2, 2, 2, '127.0.0.1', 'If the client requires a more expensive ‘balanced’ system this too can be supplied by Berke IT Systems and fully installed to their exact requirements.', 'True', '2021-01-16 10:03:41', '2021-01-16 10:04:06'),
(3, 12, 2, '127.0.0.1', 'Additional features are also available like audible alarms, LED status indicators, user replaceable battery, push-button circuit breakers and transformer-block spaced outlets.', 'True', '2021-01-16 10:05:06', '2021-01-16 10:05:35'),
(4, 13, 2, '127.0.0.1', 'These issues have helped propel thin computing to the forefront, as a cost effective solution which leaves a very small environmental footprint.', 'True', '2021-01-16 10:05:26', '2021-01-16 10:05:38'),
(5, 23, 2, '127.0.0.1', 'High availability solutions allow the business owners to focus on business while uncertainties are handled at ease and no interruption to business.', 'True', '2021-01-16 10:06:39', '2021-01-16 10:07:07'),
(6, 24, 1, '127.0.0.1', 'We can setup reliable disaster recovery (DR) databases / sites as per business requirements.', 'True', '2021-01-16 10:06:58', '2021-01-16 10:07:15'),
(7, 1, 1, '127.0.0.1', 'Not only because projection technology can give some of the crispiest, clearest images, but because the sky can literally be the limit when it comes to image size.', 'True', '2021-01-16 10:14:07', '2021-01-16 10:14:19'),
(8, 2, 1, '127.0.0.1', 'Remember – whatever your requirements, we have the solution for you and your business.', 'True', '2021-01-16 10:15:04', '2021-01-16 10:15:17'),
(9, 13, 1, '127.0.0.1', 'For businesses looking to start and build out their server network, including connectivity and providing the ability to grow with their business.', 'True', '2021-01-16 10:16:22', '2021-01-16 10:16:55'),
(10, 12, 1, '127.0.0.1', 'HP expandable tower servers are ideal for remote and branch offices in need of low-risk networking, file-and-print and shared Internet access solutions, and provide maximum internal storage and I/O flexibility.', 'True', '2021-01-16 10:16:32', '2021-01-16 10:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `keywords`, `description`, `image`, `menu_id`, `user_id`, `type`, `detail`, `status`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Audio Solutions', 'audio, solutions', 'Berke IT Systems can provide a full bespoke audio system to suit your business needs.', 'images/SfaIbMRMLcharQ08b946BUhzC31m9ZNhKB5WUSaD.jpg', 2, 1, 'Menu', '<p style=\"margin-bottom: 10px;\"><span lang=\"en-GB\" style=\"\"><b>Constant Voltage or High Impedance</b></span><span lang=\"en-GB\" style=\"\">&nbsp;Bespoke 100v line audio system. Used mainly for PA and background music. Enables several speakers to be connected to one Amplifier or Mixer/Amp, to give audio in different areas. Can also be ‘Zoned’. Common applications would be in hotels or offices.</span></p><p style=\"margin-bottom: 10px;\"><span lang=\"en-GB\"><b>Low Impedance (4 or 8ohm)</b>&nbsp;Bespoke audio system generally 2-4 speakers connected to high power Amplifier/Zone Amp, dependant on requirements. A mixer or Mixer/Amp is also incorporated into the system. Main applications are pubs, clubs, churches &amp; large halls.</span></p><p style=\"margin-bottom: 10px;\"><span lang=\"en-GB\" style=\"\">Both systems can be adapted to the Client’s requirements, i.e. microphones, CD player, MP3 player etc, Equaliser, Effects unit etc.&nbsp; The above solutions are low cost ‘unbalanced’ audio systems covering numerous audio applications.</span></p><p style=\"margin-bottom: 10px;\"><span lang=\"en-GB\" style=\"\"><br></span></p><p style=\"margin-bottom: 10px;\"><b>Balanced Systems</b></p><p style=\"margin-bottom: 10px;\"></p><p>If the client requires a more expensive ‘balanced’ system this too can be supplied by Complete IT Systems and fully installed to their exact requirements.</p><br><p></p><div><br></div>', 'True', '2021-01-15 19:02:27', '2021-01-15 19:05:54', 'audio-solutions'),
(2, 'Installations', 'installations, audio, system', 'Berke IT Systems is rapidly becoming a leading Audio Visual systems integrator and service provider.', 'images/P5JV0Ummrr9IqOlYnrfEChZhmj5KAs1kVKiYNvOt.jpg', 2, 1, 'Menu', '<p style=\"margin-bottom: 10px;\"><b>AV </b>and <b>IT </b>are increasingly becoming more entwined and we at Berke IT Systems draw on our technical expertise observed elsewhere on our site, to excel at projects requiring converged AV and IT solutions.</p><p style=\"margin-bottom: 10px;\">This includes but is not limited to digital signage, video conferencing and distributed voice and video to the desktop.</p><p style=\"margin-bottom: 10px;\">Extra network points and electrical spurs are no problem as our engineers are industry qualified for those too.</p><p style=\"margin-bottom: 10px;\">From the simplest single screen install to complex audio visual systems, we can offer a full project methodology from specification and design through to installation and integration. We can also provide training, maintenance and support for the majority of the solutions we offer.</p><p style=\"margin-bottom: 10px;\">With authorised engineers for Smart, Hitachi and Promethean to hand, we provide friendly, reliable service with competitive rates to all sector.</p><p style=\"margin-bottom: 10px;\">Berke IT Systems has the experience and the skills to make your project run smoothly, on time and on budget.</p>', 'True', '2021-01-15 19:05:32', '2021-01-15 19:05:32', 'installations'),
(3, 'Enterprise Backup Solutions', 'enterprise, backup, solutions', 'A robust, secure and resilient server backup strategy is essential for every enterprise level organisation.', 'images/l82Un2MQJd83ZkeaDeDeGA4uljMbRHkQYE0DGpka.jpg', 3, 1, 'Menu', '<p style=\"margin-bottom: 1.75rem;\">Enterprise backup is the perfect solution for organisations with multiple servers, multi-sites and a large data footprint. It utilises your existing IT infrastructure allowing your data to stay within your organisation’s IT framework. It allows for fast data restoration regardless of size – from single files to entire company-wide systems.</p><p style=\"line-height: 28px; margin-bottom: 1.75rem;\"><b>How Enterprise Backup Works</b></p><p style=\"margin-bottom: 1.75rem;\">We provide specialist Enterprise hardware, designed to provide the speed and reliability a commercial business setup demands, to develop an on-site server that takes backups of whole systems and individual files at regular intervals. These can be defined by your IT department – from hourly backups for finance departments to monthly backups of customer records.</p><p style=\"margin-bottom: 1.75rem;\">These backups are stored in either a single or multi-location on-site server solution, and can be restored anywhere across the business, whether this is companywide system recovery or restoring files for a given location’s network, and even individual systems.</p>', 'True', '2021-01-15 19:12:31', '2021-01-15 19:12:31', 'enterprise-backup-solutions'),
(4, 'Buying with Confidence', 'buying, confidence', 'Our partnerships with market leading vendors and suppliers helps Berke IT Systems bring you..', 'images/o37oRrJxi2EGm5CV6RbZR5cce4l4uO1G1sEPGSjV.png', 4, 1, 'Menu', '<p style=\"margin-bottom: 10px;\">Berke IT Systems can provide the latest technology available to you as a valued business partner.</p><p style=\"margin-bottom: 10px;\">You can have the confidence knowing that Berke IT Systems will provide solutions and technology which is not only affordable and good value for money, but also be able to support and help you manage that technology.</p><p style=\"margin-bottom: 10px;\">Through our extensive vendor relationships we can ensure that you will have a wide range of products available and that your dedicated account manager will help you assess the right technology for your needs. Berke IT Systems can also if required provide installation services and help maintain that technology. Procurement Services available include Imaging, Build, Software Installation, on-site installation followed by support.</p><p style=\"margin-bottom: 10px;\">Our partnerships with market leading vendors and suppliers helps Berke IT Systems bring you, the confidence and knowledge that our procurement team have the right expertise and training to help you buy for all your IT requirements.</p>', 'True', '2021-01-15 19:16:24', '2021-01-15 19:16:32', 'buying-with-confidence'),
(5, 'Security Calculator', 'security, calculator', 'We know full well that IT budgets are under pressure, and whether it’s storage, networking, hardware, file sharing or security, there’s always something demanding the IT department’s attention – and cash.', 'images/ItjColU05phX1jZRGQPiYPEbFLzJOm7QGUYFRPTh.jpg', 5, 1, 'Menu', '<p style=\"margin-bottom: 10px;\">To try to help in this never-ending juggling of budgetary priorities, we thought it would be useful to share Kaspersky Lab’s&nbsp;IT security calculator, which enables you to view&nbsp;the average budgets your industry peers spend on IT security by region, industry, and size. You can also see what security measures they take, the major threat vectors they encounter, how much money they lose as a result, and what you can do to avoid being compromised. The Calculator has been created as an adjustable tool. The data presented can be updated and/or added to over time based on insights from customers and Kaspersky Lab.</p><p style=\"margin-bottom: 10px;\">The tool is obviously very high level, but nevertheless we thought it provides some insight and recommendations into how your security investment compares with other organisations, and takes only a few minutes to use.</p><p style=\"margin-bottom: 10px; color: rgb(103, 107, 109); font-family: &quot;Open Sans&quot;, Helvetica, Arial, Verdana, sans-serif;\"><br></p>', 'True', '2021-01-15 19:20:04', '2021-01-15 19:20:04', 'security-calculator'),
(6, 'Connecting Your Business', 'uc, unified, communications', 'Unified communications (UC) is the integration of real-time communication services such as instant messaging...', 'images/boWHkFoa0LS2JxZhUXT7LGvkchc9xSSm9kaHv17I.jpg', 6, 1, 'Menu', '<p style=\"margin-bottom: 10px;\"><b>Unified communications&nbsp;(UC) </b>is the integration of real-time communication services such as instant messaging (chat), presence information, telephony (including IP telephony), video conferencing, data sharing (including web connected electronic whiteboards aka IWB’s or Interactive White Boards), call control and speech recognition with non-real-time communication services such as unified messaging (integrated voicemail, e-mail, SMS and fax). UC is not necessarily a single product, but a set of products that provides a consistent unified user interface and user experience across multiple devices and media types.</p><p style=\"margin-bottom: 10px;\">UC allows an individual to send a message on one medium and receive the same communication on another medium. For example, one can receive a voicemail message and choose to access it through e-mail or a cell phone. If the sender is online according to the presence information and currently accepts calls, the response can be sent immediately through text chat or video call. Otherwise, it may be sent as a non real-time message that can be accessed through a variety of media.</p><p style=\"margin-bottom: 10px;\">Unified communications is usually provided through multiple software and hardware layers but more recently this software layer has become an integration of products into a single entity, this refers to Microsoft Lync Server an amalgamation of technologies linking Microsoft Exchange, Instant Messaging, Video conferencing and collaboration tools.</p>', 'True', '2021-01-15 19:23:09', '2021-01-15 19:23:09', 'uc'),
(7, 'Virtualisation with different systems', 'virtualisation, it, systems', 'Berke IT Systems provide a full range of virtualisation solutions.', 'images/DgAyQAsBL2VqzQAZ2zV0uM6Gz7P20owm3ypCTnhM.webp', 7, 1, 'Menu', '<div>Get more out of your existing resources: Pool common infrastructure resources and break the legacy “one application to one server” model with server consolidation.</div><div><br></div><div>Reduce datacenter costs by reducing your physical infrastructure and improving your server to admin ratio: Fewer servers and related IT hardware means reduced real estate and reduced power and cooling requirements. Better management tools let you improve your server to admin ratio so personnel requirements are reduced as well.</div><div><br></div><div>Increase availability of hardware and applications for improved business continuity: Securely backup and migrate entire virtual environments with no interruption in service. Eliminate planned downtime and recover immediately from unplanned issues.</div><div><br></div><div>Gain operational flexibility: Respond to market changes with dynamic resource management, faster server provisioning and improved desktop and application deployment.</div><div>Improve desktop manageability and security: Deploy, manage and monitor secure desktop environments that users can access locally or remotely, with or without a network connection, on almost any standard</div><div><br></div><div>Berke IT Systems Professional Services team has the experience and the skills to make your virtualisation project run smoothly, on time and on budget.</div>', 'True', '2021-01-15 19:26:04', '2021-01-15 19:27:54', 'virtualisation'),
(8, 'The Printer Ranges', 'printer, ranges', 'Berke IT Systems provide a full range of printers and consumables.', 'images/eVB6tixf7oHniNznMecFXjnJ4pSuwc60V9QdofXE.jpg', 8, 1, 'Menu', '<div>Whether you need professional black and white laser printing or full colour laser output,Canon has the model that meets your needs.</div><div>Canon provides high performance and ease of use – for home offices, small and medium-sized businesses or corporate use.</div><div>Colour and mono print solutions offer outstanding performance and reliability – with the flexibility, security and control that busy corporate and business workgroups require.</div><div><br></div><div>Printers with PCL support, networking and automatic double sided printing as standard make for a high specification colour laser printer range which delivers fast, professional output for the most demanding workgroups.</div><div><br></div><div>Canon also provide superb photolab-quality printers with built in Auto Duplex print and Single Ink tanks.</div><div>As Canon has a large, comprehensive and ever changing range of printers it is not possible to provide details on this website of individual items.</div><div><br></div><div>However, we at Berke IT Systems are in direct contact with with Canon and as a partner can assist you to select the appropriate device for your businesses needs.</div><div><br></div>', 'True', '2021-01-15 19:31:17', '2021-01-15 19:32:46', 'printer-ranges'),
(9, 'Consultancy & Support', 'consultancy, support', 'Berke IT Systems is fully aware that risk in today’s business environment needs to be managed carefully.', 'images/E4AA1wfLVQ5WIoATDAMewDWcGJOdMYeYOrtAMcAC.jpg', 9, 1, 'Menu', '<p>To that end our Professional Services team are accredited to the highest levels this allied to their realworld experience provides an unbeatable combination.</p><p>Often, it makes sense to bring in a team of experts or a single specialist to handle your technology challenges so you are free to focus on core business initiatives. Berke IT Systems has the expertise and the staff you need in key technology areas to help you save time, increase productivity, maximize profitability and streamline processes.</p><p>Every business is different and operates in a different way. We at Berke IT Systems simply adapt to your environment and then discuss, schedule and carry out all works to ensure minimal disruption.</p><p><br></p><p>If your organisation has a vision but needs help to turn it into reality then we can provide professional services staff to meet your needs. We provide IT professionals with the knowledge, tools and methods to achieve more.</p>', 'True', '2021-01-15 19:34:49', '2021-01-15 19:35:32', 'consultancy-support'),
(10, 'Business Support', 'business, support', 'IT support solutions tailored to your business.', 'images/xwrOoBnCuPlLjOk0CDyVhblwvBYXPccfjerMNxBF.jpg', 11, 1, 'Menu', '<p style=\"margin-bottom: 10px;\">Our support packages are tailored to meet the exact needs of each individual customer and include&nbsp;software and technical support,&nbsp;remote network support&nbsp;and a&nbsp;dedicated telephone helpdesk&nbsp;service.</p><p style=\"margin-bottom: 10px;\">Berke IT Systems have skilled technicians available to help business of all sizes and types remotely at the end of the phone.</p><p style=\"margin-bottom: 10px;\">We can provide support with&nbsp;VPN, connectivity, remote working&nbsp;as well as server configuration issues (virtual or physical).</p><p style=\"margin-bottom: 10px;\"><p>Berke IT Systems Ltd carry accreditations from&nbsp;all major vendors&nbsp;including VMware, Microsoft, HPE, Dell EMC, Datto, Barracuda, Sophos and Kaspersky –&nbsp;among&nbsp;<a href=\"https://www.cit-sys.co.uk/partners\" style=\"box-shadow: none;\">others.</a></p></p><p style=\"margin-bottom: 10px;\">We can support systems running all Windows variants and software versions – we have specialists covering Office 365 / Teams / Exchange.</p>', 'True', '2021-01-15 19:45:41', '2021-01-15 19:46:19', 'business-support'),
(11, 'IT Outsourcing Benefits', 'it, outsourcing, benefits', 'Potential IT outsourcing offers several exceptional benefits that make it the preferred choice.', 'images/zvUjgkBsQkXAv2waxLKb72jsYmBUYkLAZtigy154.jpg', 26, 1, 'Menu', '<p style=\"margin-bottom: 10px;\">Ongoing technical support and preventative systems maintenance should be just part of the solution. Remote management and trouble shooting is a convenient way to ensure your systems are cared for without the need for remedial attention and gives you an instant response.</p><p style=\"margin-bottom: 10px;\">In addition, we can tailor our support packages to provide full time on site holiday cover, second line support for companies with an existing I.T. department, or you may need a regular scheduled weekly, bi-weekly or monthly consultancy on site.</p><p style=\"margin-bottom: 10px;\">Berke IT offer tailor made incident based contracts so you have the flexibility to select the options you want for technical support so you only pay for what you need and more importantly actually use.</p><p style=\"margin-bottom: 10px;\"><br></p>', 'True', '2021-01-15 19:49:32', '2021-01-15 19:49:32', 'it-outsourcing-benefits'),
(12, 'Networking', 'networking', 'Today’s businesses are in the most part totally reliant on their internal computer networks.', 'images/IJAioETojojKikcNzujVddi8nGZkcoewVW4OpLQT.jpg', 12, 1, 'Menu', '<p style=\"margin-bottom: 10px;\">The networks that are being designed today will have to be secure and flexible. The current environment also demands that green issues are also taken into consideration.</p><p style=\"margin-bottom: 10px;\">So whether its concern for you system from attack or the reduction of your carbon footprint each of the elements of your network requires full understanding of implications.</p><p style=\"margin-bottom: 10px;\">A complete line of products providing superior reliability, proven performance and comprehensive features that help reduce complexity and maximize return on IT.A complete line of products providing superior reliability, proven performance and comprehensive features that help reduce complexity and maximize return on IT.</p><p style=\"margin-bottom: 10px;\">Extend energy management capabilities throughout your corporation with the Cisco EnergyWise portfolio. Winner of the Best of InterOp 2009 Green Award, Cisco EnergyWise is a key component of the Cisco Borderless Network Architecture.<br></p>', 'True', '2021-01-15 19:54:32', '2021-01-15 19:54:38', 'networking'),
(13, 'PC’s & Laptops', 'pc, laptop', 'Keeping older machines running costs more today, far outweighs the value they once delivered.', 'images/JwsihHj3jQAvkeQLwdZy9pxsXEw1ZUhosKftx5Lm.webp', 12, 2, 'Menu', '<p>Replacing these aging systems allows you to take advantage of the latest hardware and software innovations. It&rsquo;s a wise investment, even within today&rsquo;s IT budget challenges.</p>\r\n\r\n<p>Berke IT Systems provide the full range of Quality PC&rsquo;s &amp; Laptops from the best known brands. These include</p>\r\n\r\n<ul>\r\n	<li>HP</li>\r\n	<li>Lenovo</li>\r\n	<li>Toshiba</li>\r\n	<li>SONY</li>\r\n	<li>Acer</li>\r\n	<li>Fujitsu</li>\r\n	<li>DELL</li>\r\n</ul>\r\n\r\n<p>The range of available PC&rsquo;s and Laptops is large and everchanging&nbsp; so if you need some advice on what devices suit your business needs then call Berke IT Systems.&nbsp;</p>', 'True', '2021-01-15 19:58:06', '2021-01-16 10:08:31', 'pc-laptop'),
(14, 'Reseller Partner Program', 'reseller, benefits, partner, program', 'Berke IT Systems reseller partners play a vital role in our business, providing sales, solution implementation, integration, technical support, and value-added services to customers', 'images/tXEmZuGNNyK1txdG4WV2i7RdhYHYUJtJXGbtdoqD.jpg', 14, 1, 'Menu', '<p style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 20px;\">Our reseller partner program has been built to offer access to a portfolio of the most innovative IT products and solutions, along with specialized services, support and benefits specifically designed to match our partners’ business models and business goals. The Berke IT Systems&nbsp;channel partner program includes a broad variety of competitive elements, including generous margins, training programs; innovative Product based incentives, Loyalty program, access to latest products and self-service access to tools and materials through our partner portal.<br></p><p style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 20px;\">Our partners also receive access to our presale experts team and inside market information.</p><p style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 20px;\">We are dedicated to support and enable our partners in every day of their business growth, working together to ensure that our mutual customers receive the most innovative products and solutions, profitability, the highest quality support, and a superior customer experience.</p>', 'True', '2021-01-15 20:01:24', '2021-01-15 20:01:24', 'reseller-partner-program'),
(15, 'The Berke IT Systems Advantage', 'bi, analitics', 'Using a tool-based and process-centric approach, we can help you from strategy and assessment to migrations, upgrades, implementations, and support capabilities.', 'images/ejdhsTNfrSqkwTCj656hmVllatwkFsWGWoKqvxfi.png', 16, 1, 'Menu', '<p style=\"padding-bottom: 15px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.24s ease-in-out 0s;\">Business Intelligence (BI) is the process of creating a structured data repository with a business objective that cleanses, harmonizes, and stores the data in the best possible manner for future use. We tender the data in a format to meet specific business needs by analyzing and retrieving actionable insights and take the necessary steps at the right time to increase productivity multiple times. Atlas Systems’ BI and Analytics expertise enables you to create, enhance, and/or expand your business capability through insight-driven decision making.</p><p style=\"padding-bottom: 15px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.24s ease-in-out 0s;\">Our team of experts enables organizations of all sizes to gain faster and deeper insights from their data and take the right action to ensure their future success. Our in-depth domain expertise would enable creating a discerning yet complex process of examining and analyzing varied and larger data sets to uncover unknown and unearthed insights – like hidden patterns and correlations which would predict market trends, customer preferences, or any other aspects of the business at ease.&nbsp; We are equipped to provide full application lifecycle support, including planning, designing, building, deploying, and supporting every stage of the business intelligence process.</p>', 'True', '2021-01-16 09:25:48', '2021-01-16 09:25:48', 'the-berke-it-systems-advantage'),
(16, 'Dimensional Modelling', 'dimensional, modelling', 'Using an abstract modelling layer based on mind maps, we define measures, dimensions, hierarchies, calculations and other attributes needed for a Data Warehouse setup.', 'images/CXv0ThuW7zdODof0zZGoZO4yMmMKuE4Lei3rafhd.png', 17, 1, 'Menu', '<p>Our business data model is driven &amp; designed from interactions with business users and we also conduct workshops with the various business units in our definition process. The DWH Staging Area is temporary location where data from source systems is copied. All required source data is made available before data is validated/transformed/transferred into the Data Warehouse. Thus having an staging area considerably reduces the risk of data loss at any point of time. Staging is designerd to keep origional copy of data for extended periods of time for archival or troubleshooting purposes.</p><p><br></p><p>Data mapping is used as a first step for a wide variety of data integration tasks including data transformation/data mediation. We perform an analysis of the data in order to get an accurate account of the different types of data being stored in the data warehouse and the nature of the different sources being used. It includes identifications of attributes, size, datatype, allowed values and mapping between the source, staging &amp; DWH model.</p>', 'True', '2021-01-16 09:28:39', '2021-01-16 09:29:25', 'dimensional-modelling'),
(17, 'Gap Analysis', 'gap, analysis', 'Data gap analysis is the process of analyzing the data structures of source system & target datawarehouse. It is first step for a wide variety of data integration tasks including: data transformation or data mediation.', 'images/YXuqxxOaEjSZCp9iJiSt4e2j8WjpTNG2xKRYygOi.jpg', 18, 1, 'Menu', '<p>Different source system can provide multiple different data formats (flatfile, xml, IDOC, csv, excel, delimited, system specific etc) to be consumed by datawarehouse application. Our experts define all such requirements, formats, mappings &amp; various complex transformations that require one-to-many and many-to-one transformation rules.</p><p><br></p><p>ETL programs may need to connect to different source systems (like SAP, Oracle, AS400 etc) to pull data from file system or operational stores. Our experts will identify, configure &amp; deploy the adapters required to connect to the source system and ensure smooth connectivity enabling system integration &amp; data flow.</p><p><br></p><p>The Extract,-Transform-Load (ETL) software (e.g. Informatica, Cognos Data Manager etc) processes inconsistent data, cleanses \"bad\" data, filters data and loads data from source to staging to target database. Three phases are scheduled &amp; executed in parallel using the scheduling tools like Opalis, Tidal etc.<br><br><br></p>', 'True', '2021-01-16 09:31:52', '2021-01-16 09:31:52', 'gap-analysis'),
(18, 'Master Data Cycle', 'master, data cycle', 'There are essentially five types of data in corporations. \"Master data\" fall into four groupings - people, things, places, and concepts.', 'images/DgESEqnlK8uUctZjKVji4OtvIoCiMX8dkEoOEuHe.jpg', 19, 1, 'Menu', '<p>Unstructured data in e-mail etc. Transactional data like sales, deliveries etc. Metadata in database structures etc. Hierarchical data represents the relationships between other data. Data management follows the cycle of CRUD - Create, Read, Update &amp; Destroy along with Search.&nbsp;MDM program involves identification of sources of master data, producers and consumers, collect and analyze metadata, appoint data stewards, implement a data-governance program, develop the model, choose a toolset, design, generate, test &amp; deploy. It includes decisions like what the master records look like: what attributes are included, what size and datatype they are, what values are allowed, mapping between the data model and the data sources.</p><p><br></p><p>Our experts propose and test a data governance model which ensures management of the availability, usability, integrity, and security of the data employed in an enterprise. Our sound data governance program includes defined set of procedures, and a plan to execute those procedures.<br><br></p>', 'True', '2021-01-16 09:34:37', '2021-01-16 09:34:37', 'master-data-cycle'),
(19, 'Data Producers', 'data, producers', 'Data is being produced by multiple things around us at a continious rate. Every digital process and social media exchange produces it.', 'images/Jor6zSSa18enRpZyhUCnntS1jTNOEdk0jgpR4UGA.png', 20, 1, 'Menu', '<p>Systems, sensors and mobile devices transmit it. Big data is arriving from multiple sources at an alarming velocity, volume and variety. To extract meaningful value from big data, you need optimal processing power, analytics capabilities and skills.&nbsp;On a broader scale, the IoT can be applied to things like transportation networks,&nbsp; smart cities, energy grid etc. Its application can help us reduce waste and improve efficiency across the spectrum, thus helping us understand and improve how we work and live.</p><p><br></p><p>There are some key factors when it comes to Big Data - Collection &amp; access of Data, Storage of Data, Privacy of Data &amp; Processing of Data. IoT &amp; BigData together are creating a culture towards realization of value of data. Insights from it can enable you to make better decisions—deepening customer engagement, optimizing operations, preventing threats and fraud, and capitalizing on new sources of revenue.<br><br></p>', 'True', '2021-01-16 09:36:44', '2021-01-16 09:36:44', 'data-producers'),
(20, 'Strategic Transformation', 'strategic, transformation', 'Our team has extensive domain and technical knowledge to accurately define your define future state vision.', 'images/RYOuKVbdCHJR8EOMVKUfAY7lKxlyVEWFKrvERQRd.jpg', 22, 2, 'Menu', '<p>This enables them to advise you on the right cloud service models and make the necessary preparations for migration to the cloud.&nbsp;Our experts conduct a readiness assessment of your entire IT ecosystem. This includes the documentation of business and IT drivers, determining cloud readiness and performing audio &amp; readiness assessments for cloud migration.</p><p>We also conduct assessments to determine which business and IT assets are most suited for cloud migration. By doing this, we are able to identify business‑relevant cloud services and transform your organization with greater precision.</p><p><br></p><p>Our team also helps to craft a revenue creation model for cloud services. This includes an evaluation of cloud ROI and helps you decide on the right cloud platform and deployment model.<br><br><br></p>', 'True', '2021-01-16 09:39:13', '2021-01-16 09:58:31', 'strategic-transformation'),
(21, 'Automation', 'automation, cloud, service', 'Our team will offer your business the necessary support, so you can build and scale applications and mobile backends.', 'images/FthpUuA6ciYBGWtbHNs2uXlFj6jafMNbex7vsjiZ.jpg', 23, 2, 'Menu', '<p>Our in-built engine provides you with indigenous automated services and APIs that will enable you seamlessly deploy applications.&nbsp;Our team is equipped with a powerful app engine that will help your scale your application automatically in response to data it captures.Our support service comes with other services such as load balancing, health checks, and application logging. This will enable you to deploy web and mobile applications at a greater speed and stay ahead of the competition.</p><p><br></p><p>The platform comes with a built-in security scanner that constantly monitors your applications for anomalies and takes quick, automated action. You never have to worry about the vulnerability of your applications and can perform your tasks with ease.<br><br></p>', 'True', '2021-01-16 09:41:18', '2021-01-16 09:58:33', 'automation'),
(22, 'Microsoft System Center Configuration Manager (SCCM)', 'microsoft, system, center, configuration, manager, sccm', 'Microsoft System Center Configuration Manager (SCCM) is a Windows product that enables administrators to manage the deployment and security of devices and applications across an enterprise.', 'images/cCYFouNfBD8CWQ3CXJpcWOreCDXksxoRihGYYP7x.png', 24, 2, 'Menu', '<div>Some core features in Microsoft System Center Configuration Manager include:</div><div><br></div><div>Windows management- To keep pace with updates to Windows 10.</div><div>Endpoint protection- To provide identification and malware protection.</div><div>Reporting- To present information on users, hardware, software, applications, and software updates.</div><div>Operating system (OS) deployment- To distribute operating systems to devices in an enterprise.</div><div>Software update management- This allows users administrators to deliver and manage updates to devices across an enterprise.</div><div>Application delivery-, Which allows administrators to deliver an application to all devices across an enterprise.</div><div>Health monitoring- Which shows client health and activities in the console, and can alert users if health statistics decrease past a specified level.</div><div><br></div><div>Several key features of System Center Configuration Manager help administrators address the bring-your-own-device (BYOD) trend in the enterprise, including user-centric management. End users can search for applications with a self-service software center and specify times when installations and upgrades take place. IT administrators can install applications in different ways on different devices. For example, as a native application on a primary device or as a Remote Desktop Services app or App-V program on a tablet. SCCM also includes role-based access control (RBAC), which enhances system security by only showing end users the interface elements that apply to their specific roles as defined by Active Directory.</div><div><br></div><div>SCCM Consulting Services</div><div><br></div><div>Systems management software for managing large numbers of computers running multiple operating systems and applications.</div><div><br></div><div>Help with the frequent updates required to maintain security and version updates</div><div>Develop a program to get a monthly cadence for distributing updates</div><div>Understanding the of conflicting reports coming from SCCM</div><div>Verify accuracy before starting the deployment</div><div>How to properly initiate Client Notification Actions</div><div>Troubleshooting (DRS) Database Replication Service within SCCM</div><div>Proactively fixing client issues</div><div>Fixing failed deployments so you can move on to other more important tasks</div><div>Fixing ConfigMgr problems</div><div>Integrate third-party add-ins(like Ivanti) for third-party updates</div><div>Support Wake on Lan(WOL) patching</div><div>Maintenance Windows feature to prevent Servers restart during business hours</div><div>Updates Windows 10 image during the build process that way your workstation will always have the latest security updates</div><div>Integrate with Power BI for better reporting</div>', 'True', '2021-01-16 09:44:31', '2021-01-16 09:58:35', 'microsoft-system-center-configuration-manager-sccm'),
(23, 'Database Upgrades / Migrations', 'database, upgrades, migrations', 'Our team helps organizations in creating a migration & upgrade strategies and plans. Our plans consider all the steps in the migration & upgrade process and are designed specifically to your organization’s needs.', 'images/RtduE7LXAc8v1ZXcpHGVieuu5oezeqOmgk09WXmG.jpg', 25, 1, 'Menu', '<p>We use time tested best practices and deploy standard sets of scripts and tools to execute efficiently and thus minimize any chances of error. Our expertise in this space allows us to provide enhanced availability, reliability, scalability and cost efficiency to our clients. We also help our clients in cross-platform database migrations.</p><p><br></p><p>We have vast experience in new database installations and patching of various databases / versions. As part of the overall engagement we advise our clients in various patch requirements. We follow documented processes to ensure that installation and patching is done as per guidelines to reduce the risk and ensure that the process becomes repeatable and less time consuming.&nbsp;Data is one of the most critical assets of any organization. To protect &amp; manage the data, we assist organizations in auditing databases and work to close any actionable items to reduce or nullify risks. We implement tools on databases to detect, alert and prevent unauthorized attempts to access databases and data. Engagement generally includes analysis and production of databases, provision of recommendations, comprehensive reports and preventive action plans.</p>', 'True', '2021-01-16 09:50:29', '2021-01-16 09:51:00', 'database-upgrades-migrations'),
(24, 'Performance Tuning DBs', 'performance, tuning, database', 'We perform end-to-end application performance analysis and tuning activities.', 'images/PvbOruDw1YG8xvKkDjhKI99kosdu5oFkzIiTEVsV.jpg', 25, 2, 'Menu', '<p>As performance tuning process needs a deep understanding of application(s), technology, database and infrastructure in order to find the bottle neck and remove them. We deploy tuning experts who understand all aspects and work with the application team, DBAs and infrastructure team to provide solutions. Organisations with large transaction volume in their business benefit the most by tuning their DBs / applications.</p>\r\n\r\n<p>We provide high-availability solutions to help organizations to increase database availability in case of hardware or software failures that would otherwise lead to unplanned business downtime. Our expert DBA team guides you in developing a unique database architecture built around your organization’s business requirements, giving back control over the database availability. High availability solutions allow the business owners to focus on business while uncertainties are handled at ease and no interruption to business.</p>', 'True', '2021-01-16 09:56:08', '2021-01-16 09:56:41', 'performance-tuning-database'),
(25, 'Cloud Migration Service', 'cloud, migration, service', 'Our cloud migration service is designed to drive flexibility and efficiency. We provide a complete spectrum of cloud migration and management consulting services.', 'images/zExlGwDKJzWWiBzIqQS13wa14e2wZn7p2w0x3Mcy.jpg', 0, 1, 'Announcement', '<div>Moving to the cloud is tricky, especially when it comes to business critical applications. How can you move your existing business applications seamlessly to the cloud, without experiencing any downtime? Atlas Systems’ Cloud Application Migration Service is designed to drive flexibility and efficiency to migrations.&nbsp;</div><div><br></div><div>Our services include cloud migration implementation to cloud services such as Amazon web services (AWS ) Microsoft Azure, Google Compute or IBM Softlayer. Our team of experts will help you transform and migrate applications at any stage of the service lifecycle. This includes addressing any concerns with infrastructure consolidation &amp; standardization, virtualization, and application re-architecture.</div>', 'True', '2021-01-16 10:22:49', '2021-01-16 10:23:20', 'cloud-migration-service'),
(26, 'Gartner projects SaaS', 'gartner, projects, saas', 'In 2021, Gartner projects SaaS will remain the largest cloud market segment by revenues, growing to $117.7 billion by year-end. Learn the new cloud strategy for enterprises in 2021 in this blog.', 'images/KgmN1oTOzEhDYasOIsCstu9FMtJjLfTbtLy6uRnG.jpg', 0, 1, 'News', '<p style=\"padding-bottom: 15px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.24s ease-in-out 0s;\">A few years from now, 2020 might just be seen as a pivotal year for cloud computing. It is the year COVID-19 radically altered the IT landscape and made a lot of CIOs and CTOs turn to the cloud to help them handle the enormous set of challenges that the pandemic brought. This global crisis forced most businesses to re-engineer their entire business and employee model. With more staff working from home, more video conferencing, deep strain on the company’s IT network and communication systems, and a full embrace of collaboration technology, it would probably be fair to say that no IT leaders envisioned 2020 quite the way it turned out.</p><p style=\"padding-bottom: 15px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.24s ease-in-out 0s;\">Today, the cloud is used as a repository for Big Data analytics. It hosts Infrastructure as a Service and Software as a Service application. It’s used as a test and development lab, as well as a place for storage. The advantages of using the cloud often far outweigh those of having data accessible locally. Distributed computing, edge computing, hybrid computing, and a move to disaster recovery in the cloud are some of the biggest changes coming to the cloud in 2021.</p>', 'True', '2021-01-16 10:28:58', '2021-01-16 10:28:58', 'gartner-projects-saas'),
(27, 'Happy Holidays from Berke IT Systems!', 'happy, holidays', '2021 will be the year disaster recovery sites mass migrate to the cloud, away from on-premises servers.', 'images/GcxAaDJZQ58gR5Re6zPlwLkwYYQX2L30PUQBdDFf.jpg', 0, 1, 'Announcement', '<p style=\"padding-bottom: 15px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.24s ease-in-out 0s;\">In the top tech trends that will define 2021, Gartner argues that “Distributed cloud is the future of cloud”. For Gartner, “Distributed cloud is where cloud services are distributed to different physical locations, but the operation, governance, and evolution remain the responsibility of the public cloud provider.” Gartner believes latency issues will be resolved because cloud services will be located closer together, which will help with data privacy and data governance issues.</p><p style=\"padding-bottom: 15px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.24s ease-in-out 0s;\">A distributed cloud can be contained within one specific geographical area, keeping it in one sovereign jurisdiction, which can be extremely advantageous for companies located across multiple states or countries. Instead of dealing with multiple governance bodies, a public cloud can centralize the data and ensure it will always remain under one jurisdiction.</p>', 'True', '2021-01-16 10:38:50', '2021-01-16 10:39:24', 'happy-holidays'),
(28, 'Next Generation AI', 'next, generation, AI', 'As one of the global #technology leaders, we are leveraging next-generation #AI & #ML powered smart solutions and providing a cost-effective, flexible, and scalable framework to extensively support your #IT requirements', 'images/ddiOwhq9EJWMLrsVmiU4uQUZ7Xovel1WpBWxHOhx.jpg', 0, 1, 'Announcement', '<p style=\"margin-bottom: 1.2rem;\">The field of artificial intelligence moves fast. It has only been 8 years since the modern era of deep learning began at&nbsp;<a href=\"https://qz.com/1307091/the-inside-story-of-how-ai-got-good-enough-to-dominate-silicon-valley/\" target=\"_blank\" class=\"color-link\" title=\"https://qz.com/1307091/the-inside-story-of-how-ai-got-good-enough-to-dominate-silicon-valley/\" rel=\"nofollow noopener noreferrer\" data-ga-track=\"ExternalLink:https://qz.com/1307091/the-inside-story-of-how-ai-got-good-enough-to-dominate-silicon-valley/\" aria-label=\"the 2012 ImageNet competition\" style=\"cursor: pointer;\">the 2012 ImageNet competition</a>. Progress in the field since then has been breathtaking and relentless.&nbsp;While supervised learning has driven remarkable progress in AI over the past decade, from autonomous vehicles to voice assistants, it has serious limitations.</p><p style=\"margin-bottom: 1.2rem;\">The process of manually labeling thousands or millions of data points can be&nbsp;<a href=\"https://www.nytimes.com/2019/08/16/technology/ai-humans.html\" target=\"_blank\" class=\"color-link\" title=\"https://www.nytimes.com/2019/08/16/technology/ai-humans.html\" rel=\"nofollow noopener noreferrer\" data-ga-track=\"ExternalLink:https://www.nytimes.com/2019/08/16/technology/ai-humans.html\" aria-label=\"enormously expensive and cumbersome\" style=\"cursor: pointer;\">enormously expensive and cumbersome</a>. The fact that humans must label data by hand before machine learning models can ingest it has become a major bottleneck in AI.</p><p style=\"margin-bottom: 1.2rem;\">At a deeper level, supervised learning represents a narrow and circumscribed form of learning. Rather than being able to explore and absorb all the latent information, relationships and implications in a given dataset, supervised algorithms orient only to the concepts and categories that researchers have identified ahead of time.</p><p style=\"margin-bottom: 1.2rem;\">In contrast, unsupervised learning is an approach to AI in which algorithms learn from data without human-provided labels or guidance.</p><p style=\"margin-bottom: 1.2rem;\">Many AI leaders see unsupervised learning as the next great frontier in artificial intelligence. In the words of AI legend Yann LeCun: “The next AI revolution will not be supervised.” UC Berkeley professor Jitenda Malik put it even more colorfully: “Labels are the opium of the machine learning researcher.”</p><p style=\"margin-bottom: 1.2rem;\">How does unsupervised learning work? In a nutshell, the system learns about some parts of the world based on other parts of the world. By observing the behavior of, patterns among, and relationships between entities—for example, words in a text or people in a video—the system bootstraps an overall understanding of its environment. Some researchers sum this up with the phrase “predicting everything from everything else.”</p><p style=\"margin-bottom: 1.2rem;\">Unsupervised learning more closely mirrors the way that humans learn about the world: through open-ended exploration and inference, without a need for the “training wheels” of supervised learning. One of its fundamental advantages is that there will always be far more unlabeled data than labeled data in the world (and the former is much easier to come by).</p><p><div class=\"vestpocket\" vest-pocket=\"\" displayntv=\"true\" style=\"display: inline-block; margin-bottom: 1.2rem; width: 552px;\"></div></p><p style=\"box-sizing: border-box; margin: 0px 0px 1.2rem; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">If anything, this breakneck pace is only accelerating. Five years from now, the field of AI will look very different than it does today. Methods that are currently considered cutting-edge will have become outdated; methods that today are nascent or on the fringes will be mainstream.</p>', 'True', '2021-01-16 10:42:06', '2021-01-16 10:42:06', 'next-generation-ai'),
(29, 'We are Hiring', 'hiring', 'Do you have marketing experience in the US healthcare payer (health insurance) industry ? We are looking for an outstanding Marketing Lead, apply now.', 'images/PEpQS1GYZY7gufm6RQKgHwrGCvNnkuNpsFdZpHSs.jpg', 0, 1, 'Announcement', '<p>Are you ready to part of an outstanding team with world-class products and serving global clients?</p><p>Do you want to work from the comfort of your home and improve your work-life balance?</p><p>Do you want to save countless commuting hours?</p><p>Do you want to be part of an organization that stood with its employees during Covid-19 with no pay cuts, no layoffs, and no furloughs?</p><p><br></p><p>Atlas Systems is a leading IT Services company focused on serving Fortune 1000 companies for close to two decades. Founded in 2003, headquartered in Princeton, NJ with a focus on IT Operations. We worked with companies like Dell, Tesla, Adobe, Johnson &amp; Johnson, NetApp, Marriot, Discovery Channel, Verizon Wireless, Nomura and Thomson Reuters</p><p><br></p><p>The company’s continuous focus on learning and nurturing in-house talent has benefited all global clients. Atlas manages some of the largest Infrastructure operations for the clients in various industries.&nbsp; Atlas has delivery centers in US and India - located at Bangalore &amp; Chennai.</p><p><br></p><p>Ideal Candidate is:</p><p><br></p><p>3-5 years of marketing experience that is focused on digital marketing including market research, competitor analysis and social media listening</p><p>Experience in Hubspot and Google analytics</p><p>Master’s degree in marketing</p><p>Strong fundamental understanding of marketing and added advantage if worked for the US market</p><p>Proven experience in generating minimum 4 inbound leads a month</p><p><br></p><p>Responsibilities:</p><p><br></p><p>Research different trends, content topics, industry authors, online events and prospects on LinkedIn.</p><p>Execute the campaign calendar</p><p>Co-ordinate with the content writers, designers, and developers</p><p>Run marketing outreach campaigns and channels such as LinkedIn, Google, webinars, events, email, etc</p><p>Perform industry-focused analysis and conclude insights for improving outbound and inbound lead generation including:</p><p>Initiate contact with potential prospects</p><p>Respond to potential prospects</p><p>Generate interest resulting in the conversion of a potential prospect to a qualified lead</p><p><br></p><p>A home office that provides the right ambiance to focus on work</p><p>Desktop / Laptop with minimum i5 processor, Windows 10, minimum 8GB RAM</p>', 'True', '2021-01-16 10:44:18', '2021-01-16 10:44:18', 'we-are-hiring');
INSERT INTO `contents` (`id`, `title`, `keywords`, `description`, `image`, `menu_id`, `user_id`, `type`, `detail`, `status`, `created_at`, `updated_at`, `slug`) VALUES
(30, 'Modern IT Operations', 'modern, it, operations', 'We utilize years of IT expertise to build innovative IT solutions for our global clients. Empower your modern IT operations teams and reduce the ITOps budget with Artificial Intelligence.', 'images/OGkBldMWEabmdvWpj7TMyDfxwD8O9m7sjT3yZC1X.jpg', 0, 1, 'News', '<p>With digital transformation well underway, CIOs are under increasing pressure to expand their roles into business strategy responsibilities helping drive innovation and business value. Still, 80% of CIOs agree that it’s challenging to find the right balance between business innovation and operational excellence.<br></p><p style=\"scroll-behavior: smooth; margin-bottom: 10px;\">Unfortunately, most IT organizations are in “firefighting” mode and commonly spend 75% to 80% of their time on “keeping the lights on”, leaving very little time or money for the essential task of supporting the corporate agenda. In addition, finding the right skills to support digital transformation and other elements of the IT agenda such as cloud and security are also a continuing problem for many IT leaders.</p><p style=\"scroll-behavior: smooth; margin-bottom: 10px;\">IT Organizations should be focusing their time on projects that enable their commercial operations while leaving the day-to-day operations to a trusted and skilled partner like Berke IT Systems.</p>', 'True', '2021-01-16 10:54:05', '2021-01-16 10:54:05', 'modern-it-operations'),
(31, 'Technology Innovations', 'technology, innovations', 'Berke IT Systems is assisting our clients to accelerate long-term profitability and business sustainability with cutting-edge technology innovations.', 'images/kFa0OmPQyc9ifcyB4ME2090DoaIV3XwW1xrfvKac.jpg', 0, 1, 'News', '<p>The financial services industry is on the verge of disruptive transformation. Post the global financial meltdown, companies are constantly driving the need to build greater compliance, transparency and efficiency, while improving customer experience dramatically. Customers expect the best user interface experiences to access their data; companies hence cannot afford to ignore the constant change.</p><p><br></p><p>The next decade for the financial services world is going to be definitive. Companies that adopt an aggressive strategy towards keeping customers at the centre of the operations will be the ones standing. Using technology to continuously drive up profitability and customer experience will become a core culture driver.<br></p>', 'True', '2021-01-16 10:59:00', '2021-01-16 10:59:00', 'technology-innovations'),
(32, 'Ensuring Improved Performance', 'ensuring, improved, performance', 'Berke IT Systems is working with global #Fintech companies and ensuring improved performance in every aspect of #ITOps. We are assisting our clients to accelerate long-term profitability and #business sustainability with cutting-edge #technology.', 'images/c6UOJMeGKO54nuOCDvcn7CkcP024pYwo2IOeikAJ.jpg', 0, 1, 'News', '<p style=\"padding-bottom: 15px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.24s ease-in-out 0s;\">As technology evolves at a rapid rate, the obvious route forward for any organization is to embrace this change. In such a scenario, there is a burning need for a reliable, trustworthy, and leading information technology partner who would harness the power of disruptive technologies to help businesses spearhead with the competitive advantage to ride the waves of change. As one of the leading consulting firms, Berke IT&nbsp;Systems not only enable organizations to reinvent and reimagine their future by creating long-lasting and sustainable business value, but we also handhold them through the uncharted paths to scale newer heights of success.</p><p style=\"padding-bottom: 15px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.24s ease-in-out 0s;\">Berke IT Systems specializes in helping businesses of varying sizes realize their full potential by solutions and upgrading their systems, revamping their processes, and restructuring their workflows &amp; methodologies. By AI leveraging AI &amp; ML and the expertise of our diverse team of highly qualified technical and industry leaders.</p><p style=\"padding-bottom: 15px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 24px; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.24s ease-in-out 0s;\">We evaluate and analyze your organization before implementing the strategies that are most befitting to your needs. Our specialized team has a discussion jointly with your team members and subject matter experts to cull out a path-breaking trajectory to optimize the change results. This amplifies the productivity of your overall organization, and helps in plummeting costs considerably and paves the way forward by anticipating the future course of actions. We are partners in your progress, are willing to share the risk and do all that it take to ensure that your<span style=\"border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;\">&nbsp;success is delivered.</span></p>', 'True', '2021-01-16 11:04:11', '2021-01-16 11:04:29', 'ensuring-improved-performance');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `position` int(11) NOT NULL DEFAULT 0,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'How much do your managed IT services cost?', 'It all depends on the number of users, computers, and servers you have in your workplace. After speaking with you about your requirements, Berke IT Systems will put together a custom proposal that covers all of your equipment and provides the services needed to keep your business running smoothly on a daily basis.', 1, 'True', '2021-01-15 11:52:26', '2021-01-15 11:55:39'),
(2, 'What is covered in your managed services plan?', '<p>Our managed services plan covers 24/7 monitoring and maintenance of your server equipment as well as monitoring and maintenance of your workstations during regular business hours. The core components of every support plan are:<br></p>', 2, 'True', '2021-01-15 11:53:00', '2021-01-15 11:53:00'),
(3, 'How do we get hold of you when we have an issue?', 'If you’re a current client and have a tech problem, you can call the main office number and speak with an engineer right away. You can also email our engineering team at&nbsp;<a href=\"mailto:armor@lekcomp.com\" style=\"background: rgb(255, 255, 255); transition-duration: 0.1s; transition-timing-function: ease-in-out; font-family: Poppins, sans-serif; font-weight: 400;\">c</a>ontact@berkeitsystems.com . If your issue arises after hours and you are a contracted customer, you can call the after-hours support line and an engineer will answer the phone (or call you right back if you leave a voicemail message).&nbsp;', 3, 'True', '2021-01-15 11:54:09', '2021-01-15 11:54:09'),
(4, 'What can your Help Desk assist with?', '<p>Our Help Desk can assist with a variety of issues, such as problems with a Microsoft Office product or other business applications (as long as you maintain a support agreement with the software vendor).<br></p>', 4, 'True', '2021-01-15 11:54:38', '2021-01-15 11:54:38'),
(5, 'What kind of contract or commitments do we have to make to get started?', '<p>Berke IT System’s standard client contract is a three-year agreement with an easy-out clause. It says “Client shall have the right to, at their discretion, terminate this Agreement for any reason as long as a 30-day notice has been provided.”</p><p><br></p>', 5, 'False', '2021-01-15 11:55:25', '2021-01-15 11:55:25'),
(6, 'I can handle my IT in-house. Why would I want to pay you to do it?', '<p>We get it — adding another line item to your business budget can be unnerving. But the truth is, handling your own tech issues is already costing you. That’s because your time is valuable. Could you be earning more money every day by doing what you do best — and letting Berke IT Systems handle the rest? Contact us today to see what we can do for your business productivity — and your bottom line.<br></p>', 6, 'True', '2021-01-15 11:56:36', '2021-01-15 11:56:36'),
(7, 'Our office computers are running slow. Can you help with this?', '<p>Absolutely! Making sure your entire IT Environment is running efficiently is what we do. This is not a double click or snap your fingers type of thing though. We typically see that most issues with speed are due to years of neglect by other IT Companies. During our onboarding process and the first several months, we dive deep into your systems, find the gaps or bottlenecks and resolve them as best as they can be. Once your systems go through a deep preventative maintenance cycle, our monitoring and maintenance service will keep them running to their peak performance. Typically for older servers and computers, we recommend moving to a Solid-State Hard Drive, the speed will amaze you!&nbsp;<br></p>', 7, 'True', '2021-01-15 11:57:53', '2021-01-15 11:57:53'),
(8, 'Can you recommend and/or purchase hardware and software for my company?', '<p>Over the last decade we have built relationships with many large and well-known distributors that offer us the discount to pass on to our clients. We can usually meet or beat advertised prices on hardware, software and we are always happy to offer unbiased product recommendations. We also offer a financing option with a great leasing company that understands the IT industry and it change cycles.<br></p>', 8, 'True', '2021-01-15 11:59:32', '2021-01-15 13:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `content_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Image01', 'images/mMRqIs9nyJPQQ8osy0RHTBbP9MnbRppogqdOxLXF.png', '2021-01-17 07:37:25', '2021-01-17 07:37:25'),
(2, 1, 'Image02', 'images/mfW9YUJuBnKsKBA1LZxN6oe7KBCj4aJtfHUp5Hbl.png', '2021-01-17 07:37:33', '2021-01-17 07:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `title`, `keywords`, `description`, `image`, `status`, `created_at`, `updated_at`, `slug`) VALUES
(1, 0, 'Services', 'services', 'Our Services', 'images/S75RJ3ILlXtNToWpZZp6yAvkcVFvC3aFlm2MRG57.jpg', 'True', '2021-01-14 10:46:44', '2021-01-19 11:32:25', 'services'),
(2, 1, 'Audio Visual', 'audio visual', 'The right audio or visual solution can make a real difference to your business.', 'images/CpjsxUZXe52K1ulIvyOfqbefXdRIMyvvAMFm23bc.jpg', 'True', '2021-01-14 11:08:40', '2021-01-19 11:32:55', 'audio-visual'),
(3, 1, 'Backup', 'backup', 'The most valuable asset is data, keep it secure with backup solutions.', 'images/kK1meB5EKCoy4yOwRB6ZLUzXZxHFuABXMDhr4dz6.jpg', 'True', '2021-01-14 11:32:35', '2021-01-19 11:39:27', 'backup'),
(4, 1, 'Procurement', 'procurement', 'A straightforward solution to IT Procurement', 'images/GyfU2JMkXtq7cc30wom2R3l3KViiq929lBYVEoXF.png', 'True', '2021-01-15 09:27:07', '2021-01-19 11:44:11', 'procurement'),
(5, 1, 'Security', 'security', 'The security of business IT systems has never been so important.', 'images/Q9PUzJCowRU8SJIjHfYzVUl3Uz8SsXbwNG15IMuU.jpg', 'True', '2021-01-15 09:27:52', '2021-01-19 11:45:12', 'security'),
(6, 1, 'Unified Communications', 'unified communications', 'Real time communication systems including Microsoft Teams…', 'images/EYgeDehmHyjb2Txd6vNHemAtTphDfvaK0epUyeuN.jpg', 'True', '2021-01-15 09:28:27', '2021-01-19 11:45:38', 'unified-communications'),
(7, 1, 'Virtualisation', 'virtualisation', 'A full range of virtualisation solutions from VMware and Microsoft Hyper-V…', 'images/lSfkOoSGsn0qmRvFV8ggLg5tuoEWju3QMRREeNQN.webp', 'True', '2021-01-15 09:29:16', '2021-01-19 11:45:52', 'virtualisation'),
(8, 1, 'Printers & Consumables', 'printers, consumables', 'Complete IT Systems provide a full range of printers and consumables', 'images/n4lxvu5S3osYmT199LCB4Hf09aSCOZY4YDHYQeou.jpg', 'True', '2021-01-15 09:29:50', '2021-01-19 11:49:02', 'printers-consumables'),
(9, 1, 'Professional Services', 'professional services', 'Our highly accredited team with realworld experience.', 'images/zvolweVR97oCIzkvEGydFwyUOje7oLZYuAEw43Ne.jpg', 'True', '2021-01-15 09:30:55', '2021-01-19 11:49:27', 'professional-services'),
(10, 0, 'Support', 'support', 'We can provide you with the IT Support solution your company needs.', 'images/dBKstn06ElPz1JtJYfFGIUb1QAWVMq5xQjkwCfcv.jpg', 'True', '2021-01-15 09:32:02', '2021-01-19 11:51:19', 'support'),
(11, 10, 'Worldwide IT Support', 'worldwide,  it, support', 'We can provide you with all your Worldwide IT Support.', 'images/nEIESlILqPKWsb01h6aQrvYaMgn8Dy2srtTaALfR.jpg', 'True', '2021-01-15 09:32:55', '2021-01-19 11:50:43', 'worldwide-it-support'),
(12, 0, 'IT Hardware & Infrastructure', 'it-hardware-infrastructure', 'Including Storage, Backup, Virtualization, Printers and Consumables.', 'images/qM04x9KHgVzJ6xjFgLAAWvYqnA99zg9aJwkCUT11.jpg', 'True', '2021-01-15 09:38:52', '2021-01-19 11:53:08', 'it-hardware-infrastructure'),
(13, 0, 'Reseller', 'reseller', 'Berke IT Systems reseller partners play a vital role in our business, providing sales, solution implementation, integration, technical support, and value-added services to customers', 'images/fHUm0OCyzsRCv0Spc7l7AEr2hRbYtq9AD2cvZNTo.jpg', 'True', '2021-01-15 12:56:59', '2021-01-19 11:51:35', 'reseller'),
(14, 13, 'Reseller Partner Benefits', 'reseller benefits', 'Berke IT Systems distribution business unit has formed partnerships and alliances with selected technology...', 'images/fWMXxuRhX43mIJHv2AQXGvTqrrUt0vUM9Rqq9q3c.jpg', 'True', '2021-01-15 12:58:17', '2021-01-19 11:53:22', 'reseller-benefits'),
(15, 0, 'Big Data', 'big data', 'Big Data & IoT (Internet of Things), are two sides of the same coin. With easy connectivity among humans & devices (IoT), speed of data generation is getting multi-fold (BigData), increasing exponentially in volume and is getting more complex in nature.', 'images/zf1SI8BBPtWQVYjISGkCdxsEVmRjYGUFEANwywot.jpg', 'True', '2021-01-15 12:59:52', '2021-01-19 11:51:47', 'big-data'),
(16, 15, 'BI and Analytics', 'bi, analytics', 'The business dynamics have been changing at a faster pace, driven by competition, mergers, social aspirations, government regulations, etc.', 'images/bQhBzArMvBAbESZrrcwItEtM3t47wynKNorFLvd0.png', 'True', '2021-01-15 13:00:43', '2021-01-19 11:53:43', 'bi-and-analytics'),
(17, 15, 'Enterprise Data Warehouse', 'enterprise, data, warehouse', 'Broad organizational questions become difficult to answer, and data is harder to analyze when it is fragmented and/or stored in multiple areas.', 'images/tlVb83dUwAMNC4jaz1FmQbql3WhouDiVfBPOEd0g.png', 'True', '2021-01-15 13:01:48', '2021-01-19 11:54:03', 'enterprise-data-warehouse'),
(18, 15, 'System & Data Integration', 'system and data integration', 'System & data integration is the combination of technical and business processes used to extract, validate, map, transform...', 'images/eBjMnWMtwgdQuBFY1SlHaFDb715x0yJtIleQVB1f.jpg', 'True', '2021-01-15 13:07:53', '2021-01-19 11:54:18', 'system-and-data-integration'),
(19, 15, 'Master Data Management', 'master data management', 'Master Data is the critical information about customers, products, location, employee, suppliers, asssets or similar categories.', 'images/Kxoz9m0D780tGtu2Yus1UcdjJsG7pyP1NTpzYIJs.jpg', 'True', '2021-01-15 13:08:29', '2021-01-19 11:54:48', 'master-data-management'),
(20, 15, 'Big Data & IoT', 'big data, iot', 'Big Data & IoT (Internet of Things), are two sides of the same coin.', 'images/D69ro8V12Pm0Kfrs2YxWBo0KkqCyXYNJdqDcUkhS.png', 'True', '2021-01-15 13:12:35', '2021-01-19 11:55:16', 'big-data-iot'),
(21, 0, 'Cloud & Infrastructure', 'cloud infrastructure', 'We culminate cloud computing in your business in a way so that you not only enjoy the benefits of cloud computing, but the transformation is seamless and cost-effective in relation to the benefits accrued from it.', 'images/rEq38ItOLnLJ2JdKVPTnebmb8O7NhcZIogGVTT5Q.jpg', 'True', '2021-01-15 13:51:02', '2021-01-19 11:51:56', 'cloud-infrastructure'),
(22, 21, 'Cloud Strategy & Consulting', 'cloud strategy', 'As cloud computing is a safe and secure way of storing and sharing data enabling businesses to access data and software on the internet as a service, organizations prefer to migrate to the cloud.', 'images/FDuQnGwkldIVPe3SG0UzgSRL8j6glc1zcHxFOXBT.jpg', 'True', '2021-01-15 18:47:34', '2021-01-19 11:55:32', 'cloud-strategy'),
(23, 21, 'Cloud Platform Support', 'cloud platform support', 'Moving to the cloud can result in immense benefits for your company. However, there are several factors that have to...', 'images/xwQG40gbyuVRiPDzqwAUPEa3uMSzLP2tixkahwyu.jpg', 'True', '2021-01-15 18:49:32', '2021-01-19 11:55:42', 'cloud-platform-support'),
(24, 21, 'Microsoft SCC Manager (SCCM)', 'sccm, microsoft', 'Microsoft System Center Configuration Manager (SCCM) is a Windows product that enables administrators to manage the deployment and security of devices and applications across an enterprise.', 'images/6NOcxcOwiqQrj85GtOuZyLKzPdzExQ2Ip7tXQfU9.png', 'True', '2021-01-15 18:50:41', '2021-01-19 11:55:55', 'sccm'),
(25, 0, 'Database Projects', 'database, projects', 'Berke IT Systems executes Database Projects to meet your business needs. We have the right skills and expertise to get database projects as per client...', 'images/BGy636Igi88IG0VCmkfnKl9PjYBDWAythW04SRTM.jpg', 'True', '2021-01-15 18:53:34', '2021-01-19 11:56:08', 'database-projects'),
(26, 10, 'Network Support', 'network, support', 'Our support packages are tailored to meet the exact needs of each individual customer and include software and technical support...', 'images/d63r32TS9UAw9cKPkoQDEr4MMxOLGizAv82KJTXF.jpg', 'True', '2021-01-15 18:58:21', '2021-01-19 11:52:46', 'network-support');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John M. Mills', 'JohnMMills@rhyta.com', '585-798-3169', 'IT Question', 'How you manage IT is critical to your competitiveness. Why?', '<p>You can see the answer on the FAQ page.</p>', 'Read', '2021-01-16 11:34:43', '2021-01-18 18:27:40'),
(2, 'Joseph E. Franco', 'JosephEFranco@jourrapide.com', '817-942-5424', 'Company Goals', 'What are the company\'s overall goals for this year?', NULL, 'New', '2021-01-16 11:37:58', '2021-01-16 11:37:58'),
(3, 'Marlene J. Pyle', 'MarleneJPyle@jourrapide.com', '516-636-1740', 'Company Events', 'Does the company ever hold out-of-the-office events?', NULL, 'New', '2021-01-16 11:38:58', '2021-01-16 11:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_12_05_113107_create_sessions_table', 1),
(7, '2020_12_26_135712_create_menus_table', 2),
(8, '2020_12_26_140443_menu', 3),
(9, '2020_12_29_203006_create_contents_table', 4),
(10, '2020_12_29_203921_content', 4),
(11, '2021_01_01_133033_create_images_table', 5),
(12, '2021_01_01_133442_image', 5),
(13, '2021_01_03_111805_create_settings_table', 6),
(14, '2021_01_03_122139_setting', 6),
(16, '2021_01_10_124535_add_address_to_users', 7),
(17, '2021_01_10_151634_add_address_to_menus', 8),
(18, '2021_01_10_151814_add_address_to_contents', 9),
(19, '2021_01_10_160624_create_messages_table', 10),
(20, '2021_01_10_160949_message', 10),
(23, '2021_01_11_223425_create_comments_table', 12),
(24, '2021_01_11_223818_comment', 12),
(25, '2021_01_13_193209_create_faqs_table', 13),
(26, '2021_01_13_195016_faq', 13),
(27, '2021_01_16_140805_add_address_to_settings', 14),
(28, '2021_01_18_175951_create_roles_table', 15),
(30, '2021_01_18_180201_roles', 16),
(31, '2021_01_18_180414_create_role_user_table', 16),
(32, '2021_01_18_181310_role_user', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8HSDAMF7DybbVcqJUy1k5cz1v6aq99vWG41ybS78', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZE9SZVc1bGhCQnFjSWpyU0tqeVVVcTdMY0JmTlo2aG02UVBsUVc1SSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1611069681),
('p0w6tS9vLGpRsZy4c7ux0WIvZpdd8g192XnIPOsQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnNvaVdodUcxZVdma2pSR0p0MXNmTUpNMGYxdURJaXBud2E2eVdNUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1611068436);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpserver` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpemail` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtppassword` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpport` int(11) DEFAULT 0,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `references` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `homepage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `keywords`, `description`, `company`, `address`, `phone`, `fax`, `email`, `smtpserver`, `smtpemail`, `smtppassword`, `smtpport`, `facebook`, `instagram`, `twitter`, `aboutus`, `contact`, `references`, `status`, `created_at`, `updated_at`, `homepage`) VALUES
(1, 'Berke IT Systems', 'berke it systems, it systems, it systems engineer, it systems manager, it systems administrator, it systems analyst, it systems architect, procurement, security, virtualisation, support', '2020 / BLM441 Special Topics I in Computer Engineering Course Project', 'Berke IT Systems', '3481 Melrose Place Beverly Hills, CA 90210', '+30 224 202 94 13', '+30 224 202 94 14', 'contact@berkeitsystems.com', '192.168.0.1', 'smtp@mail.com', '123', 0, 'http://www.facebook.com/berkeitsystems', 'http://www.instagram.com/berkeitsystems', 'http://www.twitter.com/berkeitsystems', '<div><b><font color=\"#085294\">Berke IT Systems</font></b></div><div><b><br></b></div><div><div>We provide professional IT services and distributed cutting-edge technology in America and Europe, consistently delivering business value with the latest technology.</div></div><div><br></div><div><p style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 20px;\"><span style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased;\">Berke IT Systems&nbsp;is a privately owned IT Solution Provider and Distributor founded in 2011 on the island of Kos to provide innovative IT Solutions and Services to the public and private sectors, with a focus on medium and large enterprises in America&nbsp;and Europe.</span></p><p style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 20px;\">Berke IT System<span style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased;\">s operate in the fields of IT Integration Services, Project Management and Distribution of innovative IT Security and Network Solutions.</span></p><p style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 20px;\"><span style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased;\">Basic aim is to contribute through innovative IT Solutions and value added Services to the modernization of medium and large enterprises, so that they remain competitive and operate more effectively and efficiently.</span></p><p style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 20px;\"><span style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased;\">Berke IT System<span style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased;\">s&nbsp;</span>supports its customers primarily as a technical adviser analyzing and reorganizing business process and IT Environments based on the actual needs of the customer and protecting their Systems and Network Infrastructures with cutting edge IT Security &amp; Network Technologies.</span></p><p style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased;\"><span style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased;\">At the same time Berke IT System<span style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased;\">s&nbsp;</span>takes over the supply, installation, configuration and maintenance of modern IT Solutions.</span></p><p style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased; color: rgb(98, 119, 146); font-family: &quot;Open Sans&quot;;\"><span style=\"text-rendering: optimizelegibility; outline: 0px; -webkit-font-smoothing: antialiased; color: rgb(0, 0, 0);\"><br></span></p></div><div><div><b><font color=\"#085294\">The perfect cooperation for your success</font></b></div><div><br></div><div>To ensure your company remains in tune with the latest developments in the fast-moving digital age, we have designed an integrated portfolio with a focus on four cornerstones – connectivity, digital, cloud &amp; infrastructure, and security.</div><div><br></div><div><div><b><font color=\"#085294\">Excellence</font></b></div><div><br></div><div>What makes us proud? The success of our clients, the outstanding competence and passion of our employees, strong partnerships, and the appreciation of top analysts and consultancy firms.</div><div><br></div><div><div><b><font color=\"#085294\">Join us in defining the digital transformation!</font></b></div><div><b><br></b></div><div><b><font color=\"#ff9c00\">How can we make your company digitally future proof?</font></b></div></div></div></div><div><br></div>', '<p style=\"text-align: left;\"></p><h3><font color=\"#085294\">Contact Details</font></h3><h4><span style=\"color: rgb(102, 102, 102); font-size: 16px; font-weight: 400;\">3481 Melrose Place</span><br></h4><p>Beverly Hills, CA 90210</p><p><br></p><p><span style=\"font-weight: bolder;\">P</span>: +30 224 202 94 13<br></p><p><span style=\"font-weight: bolder;\">F</span>: +30 224 202 94 14<br></p><p><b>E</b>: contact@berkeitsystems.com<br></p><p><b>H</b>: Monday - Friday: 9:00 AM to 5:00 PM</p><p></p><p></p><p></p>', '<p></p><div><font color=\"#085294\"><b>Globally connected with strategic partners</b></font></div><div><font color=\"#085294\"><b><br></b></font></div><div>Partnerships with leading technology and software enterprises are among the many strengths of Berke IT Systems.</div><div><br></div><div><div><b><font color=\"#085294\">Benefits for our customers</font></b></div><div><b><font color=\"#085294\"><br></font></b></div><div>By collaborating with specialists in joint development projects, not to mention in technology and sales alliances, we are expanding our target markets and creating genuine benefits for you as our valued customer.</div><div><br></div><div><b><font color=\"#085294\">Certified partners</font></b></div><div><b><font color=\"#085294\"><br></font></b></div><div>Best-in-class solutions are based on the best components available in all segments. The purpose of our partnerships is to pave the way to digitization and promote growth and innovation for your business enterprise. Berke IT Systems&nbsp;is certified to participate in key strategic partner programs conducted by industry leaders such as SAP and Microsoft. What\'s more, to ensure that our high quality standards are met, we have certified more than 20 partners who contribute to our own Zero Outage Program for optimizing quality and improving customer satisfaction. Our customers expressed their appreciation of our efforts by awarding us 87 points in the TRI*M survey conducted in 2018 (in the best 10 percent of the European ICT benchmark).</div><div><br></div><div><font color=\"#ff9c00\"><b>We look forward to your project!</b></font></div></div><p></p><p><span class=\"a-nobr-expr\"><br></span></p><p><br></p><p><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Samsung_wordmark.svg/220px-Samsung_wordmark.svg.png\" style=\"width: 220px;\">&nbsp; &nbsp; &nbsp; &nbsp;<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Foxconn_logo.svg/220px-Foxconn_logo.svg.png\" style=\"width: 220px;\">&nbsp; &nbsp; &nbsp;&nbsp;<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Microsoft_logo_%282012%29.svg/250px-Microsoft_logo_%282012%29.svg.png\" style=\"width: 250px;\">&nbsp; &nbsp; &nbsp;<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Alphabet_Inc_Logo_2015.svg/220px-Alphabet_Inc_Logo_2015.svg.png\" style=\"width: 220px;\">&nbsp; &nbsp; &nbsp;&nbsp;<img src=\"https://upload.wikimedia.org/wikipedia/en/thumb/0/04/Huawei_Standard_logo.svg/100px-Huawei_Standard_logo.svg.png\" style=\"width: 100px;\"></p><p><br></p><p><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Hitachi_Logo.svg/220px-Hitachi_Logo.svg.png\" style=\"width: 220px;\">&nbsp; &nbsp; &nbsp; &nbsp;<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Sony_logo.svg/220px-Sony_logo.svg.png\" style=\"width: 220px;\">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Intel_logo_%282020%2C_dark_blue%29.svg/165px-Intel_logo_%282020%2C_dark_blue%29.svg.png\" style=\"width: 165px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/250px-Google_2015_logo.svg.png\" style=\"width: 250px;\"><br></p><p></p>', 'True', '2021-01-03 09:22:03', '2021-01-16 11:22:54', '<p style=\"margin-bottom: 10px;\"><span style=\"color: rgb(8, 82, 148); font-weight: bolder;\">Welcome to&nbsp;Berke&nbsp;IT Systems</span><br></p><p style=\"margin-bottom: 10px;\"><font color=\"#ff9c00\"><b><br></b></font></p><p style=\"margin-bottom: 10px;\"><font color=\"#ff9c00\"><b>During the last decade Berke IT Systems Ltd has become a leading provider of IT solutions, products and services across the America and Europe.</b></font></p><p style=\"margin-bottom: 10px;\"><font color=\"#ff9c00\"><b>Customers can select from the widest range of the latest and most robust Information Technology products available.</b></font></p><p style=\"margin-bottom: 10px;\"><font color=\"#ff9c00\"><b>Partnership with our clients is a key element of our success.</b></font></p><p style=\"margin-bottom: 10px;\"><br></p><p style=\"margin-bottom: 10px;\">We at Berke&nbsp;IT Systems cater for all types and sizes of businesses and can provide your company with the right business solution. Whether it’s every day consumables or a fully installed and supported enterprise storage solution, we are here to fulfill all your IT needs and help bring your project in on time and under budget.</p><p style=\"margin-bottom: 10px;\">As a complete solutions provider we have top level accreditations from the major tier 1 vendors and provide top quality accredited installation and support staff. Berke&nbsp;IT Systems have strong partner relationships, these include Hewlett Packard, Microsoft, Cisco, IBM, Dell, VMware,Kaspersky Lab, Citrix, Sophos&nbsp;plus many more.</p><p style=\"margin-bottom: 10px;\">Our Professional Services team is highly accredited and experienced in projects large and small.</p><p style=\"margin-bottom: 10px;\">As a Berke&nbsp;IT Systems Ltd customer you will receive a dedicated senior account manager who will build a long and successful business partnership.</p><p style=\"margin-bottom: 10px;\"><font color=\"#ff9c00\"><b><br></b></font></p><p style=\"margin-bottom: 10px;\"><font color=\"#ff9c00\"><b> Simplicity, cost effectiveness and reliability are the cornerstones of our success.</b></font></p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `phone`, `address`) VALUES
(1, 'Berke Kiran', 'berkekiran@hotmail.com', NULL, '$2y$10$phitG6pSqfE/jXtPpnDmA.QgVm5Jsu.Z6s04QD1pF5GSkAmjIct5.', NULL, NULL, '6viuVO5tyLwodhafCc3iNTfOrSibKoBUgzoPfJ3zOgUfEmzc6jZyrDveRqbD', NULL, 'profile-photos/w9cxSgGOd0Hk4sxIGl6nF35Xidg5pEQAXjDo0x5V.png', '2021-01-12 10:22:08', '2021-01-18 16:39:07', '209-364-0936', '595 Big Rock Cove Lane Los Angeles, CA 90034'),
(2, 'Rob Daniel', 'robdaniel@hotmail.com', NULL, '$2y$10$3VdpOtrRgfVzQpYgkhUOJev0JzASZaosANNC/2tupFPrZ2gRAmiJi', NULL, NULL, NULL, NULL, 'profile-photos/XvbZlWD7debSFsedMf5kkSfSCsV7XD4NmiXkSld3.png', '2021-01-16 09:52:39', '2021-01-16 09:54:04', '+1 843-737-6180', '2128 Pendergrass Ln, Mt Pleasant, SC 29464, United States');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
