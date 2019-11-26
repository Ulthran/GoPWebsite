-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql303.epizy.com
-- Generation Time: Nov 26, 2019 at 11:02 AM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_24783286_ctbus_gop`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `Link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`IndexCol`, `Name`, `Description`, `Link`) VALUES
(1, 'Warm Up', 'That\'s right. We\'ve got a whole page devoted to warm ups and we\'ve got one devoted to cool downs too. Please take the time to look through this at least once. Warming up and cooling down properly can be easier and (dare I say?) more effective than lifting at preventing injury.<br/><br/>\r\n\r\nA lot of people seem to have a lot of opinions about warming up, whether stretching is good or bad, how long it should be, but what I\'ve found to be a pretty universally good rule of thumb for warmups is that they should leave you breathing hard and a little tired. If you come out a warmup and you aren\'t physically warm, you\'ve done it wrong.<br/><br/>\r\n\r\nAs far as other aspects of the warmup process go, it comes down a lot to personal preference. You can read to your heart\'s content about stretching but it\'s really just hard to tell if it\'s good or not (as a warmup, it is pretty definitely a good thing to finish a workout/practice with). As far as other universally agreed upon things for warmups, I have a few suggestions that might fall into this category.<br/><br/>\r\n\r\nRunning: Running will get you warm, it will get you breathing hard and get blood pumping through all of your muscles. This is a good thing to do. You could also be biking or rowing if you don\'t have space and/or hate treadmills.<br/><br/>\r\n\r\nCore Workout: This may sound crazy, because core is supposed to be the thing you plan to do at the end of the workout and then don\'t, but starting a workout/practice with a 5-7 min core workout can be very effective at getting your body ready and also counts as a workout all by itself, two birds, one 5 minute stone.<br/><br/>\r\n\r\nRolling: Foam rollers or marshmallow rollers are great for improving joint and muscle flexibility or range of motion and also help your muscles to feel less sore and recover faster after a workout (so maybe I should put this bit in the cool down section?). I still do this as an alternative to stretching during warmups often because it carries far less risk of over extending an un-warmed muscle.<br/><br/>\r\n\r\nIn summary, there are lots of other things you can do to properly warmup, but the defining characteristics of good and effective warmups are that they get your heart pumping and that you are focused on what you are doing, whatever it is.', 'LINK'),
(2, 'Deadlift', 'Deadlifting has a reputation for being one of the best forms of strength training available and it can definitely produce pretty spectacular results, if done properly. I also think of this exercise as one of the most dangerous you can do because it involves so much weight and puts so much strain on your muscles, joints, and back. I\'m particularly wary of back issues and so when I see people doing this I always cringe a bit.<br/><br/>\r\n\r\nYou\'ll find from looking around on the web that there a lot of different forms of deadlifts (\'normal\', sumo, etc), and any of these choices have benefits and detractors which I won\'t go into here. If there\'s one thing I could say before you try deadlifting, it\'s: know exactly what you should be doing, know exactly what muscles it should be working, and stop if it doesn\'t feel right to figure out why.<br/><br/>\r\n\r\nKeep your core engaged throughout the whole motion. ', 'LINK'),
(3, 'Russian Twists', 'Russian twists are great for working a whole bunch of abdominal muscles that don\'t often get worked. When doing these, you sit on the floor, lift your feet up off the floor (you can bend your knees to make it easier), and then twist your torso from left to right. You can also do this while holding a barbell to make it harder on your core and add in a bit of a workout for your arms.<br/><br/>\r\n\r\nSome things to note when doing Russian twists, especially when you\'re tired and nearing the end of a set, it can be easy to start losing form. Remember that you will get more out of these if each twisty twists as far as you can twist. Also you might start letting your back take on some of the load as it bows outwards and you kind of fall backwards. Don\'t let this happen. Keep your core strong and if you need to cut down on quantity to preserve quality, do so.', 'LINK'),
(4, 'Dumbbell Rows', 'You do dumbbell rows on a bench (usually roughly knee height) with one dumbbell. Have one knee on the bench with the corresponding hand also on the bench with straightened elbow. The other leg should be roughly straight and you hold the dumbbell with the corresponding hand. A \'row\' is pulling the dumbbell up to where your elbow is making a ~90 degree angle and then letting it back down.<br/><br/>\r\n\r\nThis should work your arm and shoulder as well the hamstring of the straightened leg. Some things to look out for, you want to keep your core tightened throughout this whole motion. Also you want your head to be down, in line with the rest of your spine, so don\'t go looking at yourself in the mirror as you do these (unless the mirror... is the bench). You also don\'t want to be using enough weight that you have to contort your body to reach that 90 degree angle, if you can\'t get there with a relatively flat back and level shoulders you should probably be using lower weight.', 'LINK'),
(5, 'Pikes', 'Pikes (or pike ups) are good for strengthening your core and shoulders. To perform a pike, start in a plank position (straight arms) and then raise your hips so that your abdomen and legs make an inverted \'V\'. Hold the \'V\' position for some period of time and then back to plank position and repeat.<br/><br/>\r\n\r\nAs this is mostly a core workout, it\'s important to note that your core should be engaged the whole time. If you feel your back starting to cave in, stop and finish when you can do so in proper form. Also, your neck should stay more of less in line with your spine throughout the movement. That is to say, in plank position you should be looking between your hands and in the \'V\' position you should be looking somewhere between your hands and your feet, depending on how \'V\'y you get.<br/><br/>\r\n\r\nYou can also make this workout harder if that\'s your thing. You can add in a pushup-like motion at the \'V\' position, where you use your triceps and shoulders to lower your head down to ground and back up. You can also do these with your feet up on a big bouncy ball which is really good for improving core stability (unstable activities, like being on a bouncy ball, are great for activating lots of muscle groups at once, but can also be dangerous because they are unstable. Make sure you setup properly so that nothing and no one around you stands to get hurt or hurt you).', 'LINK'),
(6, 'Nordic Hamstring Curls', 'Arthur\'s favorite: nordic hamstring curls. These are great for both preventing and recovering from hamstring injury. They can also be a bit tricky to find the right set up for. If you have a partner, have them hold down your ankles while you are kneeling on the ground. Then you fall forward as slowly as you can and your partner keeps your ankles in place. In case at some point before reaching the ground your hamstrings can\'t handle it, you should be ready to catch yourself with your hands.<br/><br/>\r\n\r\nThis is all about the hamstrings (and a little core, like pretty much every exercise ever). When you lower yourself, you should be relying only on your hamstrings, don\'t let your back start doing any work, don\'t let your hips push back, keep them in line with your upper body. If you\'ve got some serious hammies, you might be able to go down and then come back up. That\'s cool.<br/><br/>\r\n\r\nIf you don\'t have a partner or a machine for it, you can try to use some heavy, stationary object like a weight rack to keep your ankles in place. Just please don\'t crush yourself with your dresser in your room.', 'LINK'),
(7, 'Assisted Pull Ups', 'Assisted pull up or normal pull up, both are great for strengthening your entire upper body in ways that us frisbeeers don\'t often get. You can do front or backhand grip on the bar, hands close or far apart, the key point is just that you lower yourself all the way and then bring yourself all the way back up on each rep. If you have to decrease reps to maintain the full range of motion on each one, do so. It\'s really at the extremes of this motion, top and bottom, that the most gains come from in terms of strength and the range of motion that this strength can be applied to.', 'LINK'),
(8, 'Flutter Kicks', 'Lie on your back and flutter. That\'s the jist of this one. From a supine position, you pick your feet up a little off the floor (the closer you keep them to the ground without touching, the better) and then kick your feet up and down (one going up while the other goes down is easiest but your also welcome to keep them together). One \'rep\' is when one foot does a full \'rotation\', i.e. count reps on one foot, not both.<br/><br/>\r\n\r\nIt can be easy to let your back start bending up off the ground and taking on more and more load, especially as you near the end of a set of these. Don\'t let this happen. You can make it easier by putting your hands under your butt, slightly harder by having them down by your sides, and harder still by having them crossed on your chest or above your head. You also want to keep your head laid back on the floor, don\'t go straining it up at the ceiling.<br/><br/>\r\n\r\nThere are all sorts of variations on this you can do to work different muscle groups in the core. To list just a few examples, doing flutter kicks while moving your legs side to side, doing flutter kicks while moving your legs up and down (as high up as you can get them, up to and not exceeding 90 degrees, directly above the hips), etc.', 'LINK'),
(9, 'Skater Squats', 'Skater squats are an incredibly effective, bodyweight exercise for training speed and acceleration. To do one rep, start standing upright on one leg and then slowly bend your knee so as to lower your other knee to the ground (but not the foot, keep that off the ground). Once on the ground, without bouncing or using momentum, lift back up to the starting position, driving through the heel of your planted foot. You may need to bend your upper body forward and hold your arms out to keep balanced, but keep your back straight in doing so.<br/><br/>\r\n\r\nThese can be very difficult and deter people from wanting to do them if at first they can\'t get anywhere near the ground with their knee. Don\'t let that stop you. Even if you aren\'t getting all the way to the ground, keep doing these and keep pushing to get your knee all the way down. Also a useful way of \"practicing\" for these is by doing RFE split squats. Make sure when you are doing RFEs that you are going through the full range of motion (your back knee should be near or on the ground when your front knee is bent all the way) in a controlled way.<br/><br/>\r\n\r\nIf you\'re looking to make these more difficult for yourself, you can try using one hand to hold your back foot up against your glutes (your butt (your fanny(your rear end))) as you perform the motion. If this is still too easy, use both hands to hold your foot there.', 'LINK'),
(10, 'Cool Down', 'Cool downs, like warm ups, are an incredibly important and very often skipped part of any workout. There are lots of different ways to do it, lots of different philosophies on what the best way is, but what they all have in common is increasing blood flow to your muscles. You\'ve just worked really hard and now your muscles are tired and ready to seize up and get sore. To avoid both of these things, you can do some running, biking, etc that keeps your muscles moving and keeps up their range of motion without working them too much. You can also do things like stretching and foam rolling to both keep your muscles from tightening up into tiny balls and to increase blood flow, making you less sore in the following days.<br/><br/>\r\n\r\nNever underestimate the power of a good cool down to reduce future unpleasantness.', 'LINK'),
(11, 'Leg Press', 'The leg press can be used to train exclusively leggy muscles (hamstrings, glutes, and quads). The motion is pretty simple. Start with your knees bent at about a 90 degree angle, feet flat on the platform (you want to be pushing through your heels for the whole motion), and not too much weight (don\'t go breaking yourself). Then extend your legs in a controlled motion, don\'t straighten your legs all the way, and then return to the start position.<br/><br/>\r\n\r\nJust because you\'re working your legs, don\'t forget to keep your core engaged. Keeping your butt flat on the seat and your back pressed against the back of the seat are both your core at work. Also, seriously, staying controlled and not locking off your knees are very very important. This is generally a pretty safe exercise but if it goes wrong it can go very wrong, and it\'s almost always because of too much weight or straight legs.', 'LINK'),
(12, 'Windshield Wipers', 'This information brought to you from ignorelimits.com, so you know it\'s good. The windshield wiper is really good for working oft-unworked sections of your core. You start on your back with your legs straight up, making a 90 degree angle with your torso. Then you twist your core to bring your legs down to the floor on one side (without touching) then back up and down on the other side. This is one rep.<br/><br/>\r\n\r\nThese are hard. If you can\'t keep your shoulders more or less flat on the floor while your doing these, consider two alternatives. First, try doing it with your arms spread out to give you that lateral support. If this results in you breaking your shoulder, it isn\'t for you. You can then try progressing to bent legs or lowered legs until you find something you can do with proper form.<br/><br/>\r\n\r\nAs with most core exercise on your back, you\'ll find your lower back trying to leave the ground. Keeping it from doing so is part of what works your core and keeps you from experiencing back pain later in life.', 'LINK'),
(13, 'Bench Press', 'There\'s a lot to say about this one. The motion is pretty simple, raising and lowering a bar above your chest, but there is a lot to keep in mind as you are doing that. When done properly, the bench press can work almost all of the muscle groups in your upper body and make you all big and biff (like B2tF). So lets ensure we\'re doing it properly.<br/><br/>\r\n\r\nOnce your on the bench, face up and feet on the floor, grab the bar with four fingers on top and your thumb around the other way and make sure your shoulders are centered. To begin the motion, push the bar up off the rack and bring it to roughly over your sternum, then lower and raise. In the process of lowering and raising, you want your back to be arching so as to transfer force from your legs into the motion and you want to keep your elbows from flaring out to right angles.<br/><br/>\r\n\r\nFor this exercise especially, it can be particularly helpful to have a spotter to help when you can\'t finish a rep or, if they\'re more experienced with this than you are, to advise on form and technique.', 'LINK'),
(14, 'Garhammer Raises', 'Garhammer raises are a nice way to work your abdominal muscles all the way from top to bottom. To do these, either lie on the floor or on an angled bench (head higher than feet) and then bring your feet up from just above the floor to ninety degrees, directly above your hips, and then go back down (without touching the floor). The floor version is easier (I think) and can be made easier still by putting your hands under you bum or down by your sides, as opposed to crossed on your chest. On the bench, you would typically want to hold on above your head.', 'LINK'),
(15, 'RFE Split Squat', 'Rear foot elevated (RFE) split squats are really good for working your legs because unlike with two leg workouts like deadlifts where your back might be the limiting factor in how much you can lift, here it is almost certainly going to be purely limited by the strength of your hamstrings. To do these, get a bench and set it up behind you, then, facing away from it, put one foot on the bench and get your other foot to a position where, when you bend the knee of the leg on the ground to a 90 degree angle, your knee is directly over or maybe a little in front of the planted heel.<br/><br/>\r\n\r\nTaking note of where your foot should be (how far from the bench), you can now add weight, in the form of barbells or plates or a bar on the shoulders. You get the most out of this exercise when you complete it slowly and with a full range of motion. This means going all the way down to a 90 degree angle on that front knee and then coming back up from that without any momentum from coming down.<br/><br/>\r\n\r\nWhen you are adding relatively large amounts of weight, the same principles apply as with most weight lifting. Maintain a slightly bowed in arch in your lower back while also keeping your core as tight as you can. Also, make sure not to let your shoulders drop if you\'re using barbells or to lean too far forwards. Your upper body should be more or less vertical and with good posture.', 'LINK'),
(16, 'Reverse Row', 'A reverse row can be done with bodyweight or with a bar and added weight. I don\'t know much about the bar with weight technique so I\'ll explain a bodyweight reverse row. The idea here is to do a pull up sort of motion but with your arms out in front of you instead of overhead. To achieve this, you would usually use a bar on some low rack and then position yourself under it, so that you can pull yourself up while your heels stay on the ground.<br/><br/>\r\n\r\nThere are lots of different ways to do these, but given their purpose here which is mainly to develop some counter muscles to what bench press is developing, I\'d say overhand grip and nothing fancy added in is probably the way to go.', 'LINK'),
(17, 'Supermans', 'Superpersons are one of the funniest looking exercises around, in my opinion. You start out lying face down on the floor, arms straight out above your head, and then you lift both your upper and lower bodies up off the floor to form a kind of u-shape. This one works muscles and flexibility that very few people have so don\'t be discouraged if you find they are hard or even painful to do. Look around on the internet for easier versions of them, add a mat under your pelvis if you\'re in a hard floored gym, but don\'t skip this part just because it\'s weird and uncomfortable. The advantages of this kind of counterbalancing (with respect to exercises you normally do) exercise are numerous.', 'LINK');

-- --------------------------------------------------------

--
-- Table structure for table `ex_wk_junction`
--

CREATE TABLE `ex_wk_junction` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `ExIndex` int(11) NOT NULL,
  `WkIndex` int(11) NOT NULL,
  `OrderNum` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ex_wk_junction`
--

INSERT INTO `ex_wk_junction` (`IndexCol`, `ExIndex`, `WkIndex`, `OrderNum`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 3, 1, 3),
(4, 4, 1, 4),
(5, 5, 1, 5),
(6, 6, 1, 6),
(7, 7, 1, 7),
(8, 8, 1, 8),
(9, 9, 1, 9),
(10, 10, 1, 10),
(11, 1, 2, 1),
(12, 11, 2, 2),
(13, 12, 2, 3),
(14, 13, 2, 4),
(15, 14, 2, 5),
(16, 15, 2, 6),
(17, 16, 2, 7),
(18, 17, 2, 8),
(19, 10, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `RandID` int(11) NOT NULL,
  `VideoName` text NOT NULL,
  `VideoLink` text NOT NULL,
  `Notes` longtext NOT NULL,
  `Year` year(4) NOT NULL,
  `Tournament` text NOT NULL,
  `Private` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unverified_users`
--

CREATE TABLE `unverified_users` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `RandID` int(11) NOT NULL,
  `VerificationCode` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `AccountType` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `AccountType` tinytext NOT NULL,
  `LoginAttempts` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verified_goppers`
--

CREATE TABLE `verified_goppers` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `Email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE `workouts` (
  `IndexCol` bigint(20) UNSIGNED NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `EstimatedTime` time NOT NULL,
  `Plan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`IndexCol`, `Name`, `Description`, `EstimatedTime`, `Plan`) VALUES
(1, 'Lifting Plan Fase 2 (Oct - Mar): Day 1', 'The goal of this fase is to continue building strength and to start developing power. This transition is critical since much of the work we do as gods involves explosive movements - like when we sky people.\r\n<br/><br/>\r\nRepetitions are 10, 8, 6, 4, 2 (5 sets total). Aim to increase weight each set. Lifts should start at about 70% and increase to about 90%. For activities that do not decrease in reps, maintain about 80%. Aim for 30 secs between sets.\r\n<br/><br/>\r\n(*) means an exercise increases in reps.', '01:30:00', 'Warm-up: spin, treadmill, erg, etc (5-10 mins or longer, as needed)<br/>\r\nDeadlift *<br/>\r\nRussian twists with weight (20 each side)<br/>\r\nDumbbell rows *<br/>\r\nPikes (15 but you can take a break if you need to get your form back)<br/>\r\nNordic Hamstring Curl (3x3-5)<br/>\r\nAssisted pull-ups (3x max up to 10)<br/>\r\nFlutter kicks (40x, every time your right foot goes up, that\'s one)<br/>\r\nSkater squats (3x10)<br/>\r\nCool down: spin, treadmill, erg, etc (5-10 mins or longer, please don\'t skip this part)<br/>'),
(2, 'Lifting Plan Fase 2 (Oct - Mar): Day 2', 'The goal of this fase is to continue building strength and to start developing power. This transition is critical since much of the work we do as gods involves explosive movements - like when we sky people.\r\n<br/><br/>\r\nRepetitions are 10, 8, 6, 4, 2 (5 sets total). Aim to increase weight each set. Lifts should start at about 70% and increase to about 90%. For activities that do not decrease in reps, maintain about 80%. Aim for 30 secs between sets.\r\n<br/><br/>\r\n(*) means an exercise increases in reps.', '01:30:00', 'Warm-up: spin, treadmill, erg, etc (5-10 mins or longer, as needed)<br/>\r\nLeg press *<br/>\r\nWindshield wipers (20 each side)<br/>\r\nBench press *<br/>\r\nGarhammer raise (3x10)<br/>\r\nRFE split squat *<br/>\r\nReverse row (3x10)<br/>\r\nSupermans (2x20)<br/>\r\nCool down: spin, treadmill, erg, etc (5-10 mins or longer, please don\'t skip this part)<br/>'),
(3, 'Kung Fu Throwing', 'Here\'s the link to an article that talks about the original thing: https://skydmagazine.com/2012/02/kung-fu-throwing/<br/>\r\nIn frisbee, throwing is something you have to be able to do well. For this reason, this workout is entirely based on throwing and, while it can be supplemented with some other stuff, can certainly be considered a workout in and of itself.\r\n<br/><br/>\r\nThe routine is broken down into 5 parts. Remember: if something feels weird or awkward or hard, it\'s probably something you should be practicing more (unless it\'s weird in a bad way, don\'t break yourself).', '01:15:00', 'Part 1:<br/>\r\n - Throw 25 forehands, backhands and hammers at distances of 10, 20 and 30 yards<br/>\r\n - Throw 25 full lefty forehands, backhands and hammers at comfort distance (usually ~15 yards)<br/>\r\n - Stretch 5-10 minutes (or do whatever form of warmup you prefer)<br/><br/>\r\n\r\nPart 2:<br/>\r\n - As low as you can release<br/>\r\n - As far as you can release from your body<br/>\r\n - As high as you can release<br/>\r\n - Compass throwing. Imagine a compass with your pivot foot at the center. Pivot N and throw. Pivot NE and throw. Pivot E and throw and so on around the compass. Go four times around, twice throwing forehands and twice throwing backhands.<br/>\r\n - Rinky-dink. Throw 100 throws at a distance of 2-yards. The goal is rapid catch and release. Aim your throws to be easily catchable, but placed in such a way as to allow your partner to practice a variety of catches. Don’t regrip! However you catch, you should throw. If pancake, throw hamburger. If you claw-catch over your head, upside-down backhand.<br/>\r\n - Optional: Throw 10s at comfort outside in and inside out.<br/><br/>\r\n\r\nPart 3:<br/>\r\n - Huck for 10 minutes.<br/><br/>\r\n\r\nPart 4:<br/>\r\n - 25s with pivot at comfort<br/><br/>\r\n\r\nPart 5:<br/>\r\n - Cool down<br/>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `ex_wk_junction`
--
ALTER TABLE `ex_wk_junction`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `unverified_users`
--
ALTER TABLE `unverified_users`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `verified_goppers`
--
ALTER TABLE `verified_goppers`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- Indexes for table `workouts`
--
ALTER TABLE `workouts`
  ADD UNIQUE KEY `IndexCol` (`IndexCol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ex_wk_junction`
--
ALTER TABLE `ex_wk_junction`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unverified_users`
--
ALTER TABLE `unverified_users`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verified_goppers`
--
ALTER TABLE `verified_goppers`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workouts`
--
ALTER TABLE `workouts`
  MODIFY `IndexCol` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
