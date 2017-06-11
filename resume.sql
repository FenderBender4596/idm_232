-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 07, 2017 at 12:46 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `idm232-larry`
--

-- --------------------------------------------------------

--
-- Table structure for table `larry-resume`
--

CREATE TABLE `larry-resume` (
  `id` int(3) NOT NULL DEFAULT '0',
  `start year` int(4) DEFAULT NULL,
  `end year` int(4) DEFAULT NULL,
  `job` varchar(300) DEFAULT NULL,
  `duties and employment` text,
  `skills` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `larry-resume`
--

INSERT INTO `larry-resume` (`id`, `start year`, `end year`, `job`, `duties and employment`, `skills`) VALUES
(1, 2007, 2017, 'Creative Director', 'Communications and Marketing, Enrollment Management and Student Success Drexel University Philadelphia, PA', 'Work with key stakeholders within the department and University communities, to develop and implement complex multichannel marketing strategies and communication sequences that directly impact the University’s strategic goals. \r\n\r\nCreative oversight for all projects within the Division of Enrollment Management and Student Success. Responsible for production on all departmental projects from initial concept through final delivery.\r\n\r\nBrand steward. Design high-profile projects that include both print and electronic communications. Budget management, negotiation and oversight of over $1,000,000 for print, mail, photography, and video development.\r\n\r\nHire, manage, mentor, and set direction for in-house creative staff of 7 that includes designers, editors, and videographer.  Maintain relationships with outside vendors.'),
(2, 2005, 2007, 'Print and Interactive Art Director', 'Enrollment Management Creative Group Drexel University Philadelphia, PA', 'Directed, designed, and oversaw the creation of recruitment materials that created brand recognition for Drexel University.\r\n\r\nProjects included web design and development, viewbooks, catalogs, brochures, posters, direct mail advertising, search materials, electronic communications, and multimedia presentations.\r\n\r\nManaged and set creative direction for design staff. Developed and maintained communication sequence and marketing strategies for Graduate and Undergraduate Admissions with the Assistant Dean of Communications. Designed user experience based on complex information architecture.\r\n\r\nCreated storyboards and HTML prototypes to represent the user experience.\r\n\r\nCoordinated, directed, and oversaw freelance designers, illustrators, and photographers while ensuring projects delivered within budget and on time.'),
(3, 2002, 2005, 'Assistant Director of Communications', 'Enrollment Management Creative Group Drexel University Philadelphia, PA', 'Supported the Assistant Dean of Communications in developing communication strategies for Drexel University’s Division of Enrollment Management. \r\n\r\nDeveloped creative solutions for web and print projects. Managed all day-to-day responsibilities and workload of the creative staff. \r\n\r\nAdhered to production schedules to complete projects in a timely manner. Worked with freelance designers, writers, and photographers.'),
(4, 1998, 2001, 'Senior Graphic Designer', 'Enrollment Management Creative Group Drexel University Philadelphia, PA', 'Designed and produced recruitment materials from concept through completion for Drexel University. \r\n\r\nProjects included web site design and development, viewbooks, catalogs, brochures, posters, direct mail advertising, search materials, CD-ROMs, and multimedia presentations.\r\n\r\nManaged photo sessions. \r\n\r\nPrepared files for the printer. Worked with clients to develop concepts.'),
(5, 1995, 1998, 'Graphic Designer', 'Regional Communications Department Allegheny University of the Health Sciences Philadelphia, PA', 'Designed and produced all marketing materials for Allegheny Integrated Health Group. \r\n\r\nProjects included print and direct mail advertising, web site design, publications, brochures, and signage. \r\n\r\nPriced and tracked all jobs from concept to completion. Directed and prepared photo shoot.'),
(6, 1989, 1991, 'Graphic Designer', 'Portfolio Marketing Group Philadelphia, PA', 'Designed and produced materials for retail advertising including directories, catalogs, posters, |and advertisements. \r\n\r\nDesigned and produced corporate brochures and collateral pieces. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `larry-resume`
--
ALTER TABLE `larry-resume`
  ADD PRIMARY KEY (`id`);