-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `member` (`id`, `name`, `name_en`, `year`, `class`, `skill`, `email`, `created_at`, `updated_at`) VALUES
(1,	'陳曼欣',	'Mandy',	'108',	'醫資二',	'SAS',	'm504541422@gmail.com',	NULL,	NULL),
(2,	'林玲蓉',	'Carol',	'108',	'醫資二',	'Java,SQL,Unity',	'caroltail110204@gmail.com',	NULL,	NULL),
(3,	'郭庭維',	'Geannie',	'108',	'資管二',	'Java、Android',	'berrypie.wei@gmail.com',	NULL,	NULL),
(4,	'詹惠婷',	'Doris',	'108',	'資管二',	'Java、Python',	'doris10152016@gmail.com',	NULL,	NULL),
(5,	'蔡卓庭',	'Joe',	'108',	'資管二',	'Java、C、SQL',	'joe51151108@gmail.com',	NULL,	NULL),
(6,	'陳貞樺',	'Jane',	'108',	'醫資二',	'MATLAB、PHP、Wordpress',	'jen850909@gmail.com',	NULL,	NULL),
(7,	'黃資昂',	'Nick',	'108',	'前瞻製造二',	'C#,Python,Flexsim',	'608445003ccu@gmail.com',	NULL,	NULL),
(8,	'史博先',	'Barry',	'108',	'資管二',	'Java, Android, AWS',	'index50710@gmail.com',	NULL,	NULL),
(9,	'楊雅婷',	'Raina',	'108',	'資管二',	'C++、php、SQL',	'Raina0229@gmail.com',	NULL,	NULL),
(10,	'游程傑',	'Duck',	'108',	'資管二',	'C++,python',	'yseyableach@yahoo.com.tw',	NULL,	NULL),
(11,	'李奇鴻',	'Kevin',	'108',	'醫資二',	'C、Java',	'decadehope0604@gmail.com',	NULL,	NULL),
(12,	'謝雨錡',	'Ariel',	'108',	'資管二',	'C#、Python、SQL',	'ych60819@gmail.com',	NULL,	NULL),
(13,	'曾怡樺',	'Winnie',	'108',	'資管二',	'Java、php、SQL',	'yihua2486@gmail.com',	NULL,	NULL),
(14,	'黃彥筑',	'Mia',	'109',	'醫資一',	'Java、Python、C',	'miaychuang@gmail.com',	NULL,	NULL),
(15,	'陳冠宇',	'Manu',	'109',	'資管一',	'Laravel、SQL',	'tanshui601@gmail.com',	NULL,	NULL),
(16,	'楊渝婷',	'Ting',	'109',	'醫資一',	'HTML5、PHP、SQL、Python',	'aa0929099119@gmail.com',	NULL,	NULL),
(17,	'卓恩安',	'Ann',	'109',	'醫資一',	'',	's669130123@gmail.com',	NULL,	NULL),
(18,	'李珮妤',	'Bobo',	'109',	'資管一',	'Java、Android、C++',	'lip549a@gmail.com',	NULL,	NULL);

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2021_03_02_023743_create_member_table',	1),
(4,	'2021_03_02_084127_create_paper_table',	1);

DROP TABLE IF EXISTS `papers`;
CREATE TABLE `papers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `papers` (`id`, `name`, `year`, `author`, `type`, `created_at`, `updated_at`) VALUES
(1,	'Ya-Han Hu*, Yi-Lien Lee, Ming-Feng Kang, Pei-Ju Lee, Constructing Inpatient Pressure Injury Prediction Models Using Machine Learning Techniques, CIN: Computers, Informatics, Nursing, accepted, 2019. (SSCI)',	'2019',	'雅涵',	'journal',	NULL,	NULL),
(2,	'Jiann-Der Lee, Tsong-Hai Lee, Yen-Chu Huang, Meng Lee, Ya-Wen Kuo, Ya-Chi Huang, and Ya-Han Hu*, Prediction Model of Early Return to Hospital after Discharge Following Acute Ischemic Stroke, Current Neurovascular Research, 2019, 16, 1-11. (SCI)',	'2019',	'雅涵',	'journal',	NULL,	NULL),
(3,	'李珮如、胡雅涵*、李彥賢、吳俊霆，運用資料探勘技術預測分析持續互動性高之粉絲團：以臉書醫療健康粉絲團為例，電子商務學報，已接受。(TSSCI)',	'2019',	'雅涵',	'journal',	NULL,	NULL),
(4,	'Chih-Fong Tsai, Wei-Chao Lin, Ya-Han Hu*, and Guan-Ting Yao, Under-Sampling Class Imbalanced Datasets by Combining Clustering Analysis and Instance Selection, Information Sciences, 477 (2019) 47-54',	'2019',	'雅涵',	'journal',	NULL,	NULL),
(5,	'Ya-Han Hu*, Wen-Ming Shiau, Sheng-Pao Shih, Cho-Ju Chen, (2018) Considering online consumer reviews to predict movie box-office performance between the years 2009 and 2014 in the US, The Electronic Library, 36 (6) (2018) 1010-1026',	'2018',	'雅涵',	'journal',	NULL,	NULL),
(6,	'Ya-Han Hu*, Chun-Tien Tai, Chih-Fong Tsai, and Min-Wei Huang, Improvement of Adequate Digoxin Dosage: An Application of Machine Learning Approach, Journal of Healthcare Engineering, vol. 2018',	'2018',	'雅涵',	'journal',	NULL,	NULL),
(7,	'Chia-Mei Chang, Jeng-Hsiu Hung, Ya-Han Hu*, Pei-Ju Lee, Cheng-Che Shen*, Prediction of Preoperative Blood Preparation for Orthopedic Surgery Patients: A Supervised Learning Approach, Applied Science, 8(9), 1559, 2018',	'2018',	'雅涵',	'journal',	NULL,	NULL),
(8,	'Chia-Hui Liu, Cheng-Jyun Lin, Ya-Han Hu*, Zi-Hung You, Predicting the Failure of Dental Implants Using Supervised Learning Techniques, Applied Science, 8(5), 698, 2018',	'2018',	'雅涵',	'journal',	NULL,	NULL),
(9,	'Cheng-Che Shen, Li-Yu Hu, Shih-Jen Tsai, Albert C. Yang, Ya-Han Hu*, Risk Stratification for the Early Diagnosis of Borderline Personality Disorder Using Psychiatric Comorbidities, Early Intervention in Psychiatry, 12 (4) (2018) 605-612',	'2018',	'雅涵',	'journal',	NULL,	NULL),
(10,	'Mao-Te Chuang, Ya-Han Hu*, Chia-Lun Lo, Predicting the Prolonged Length of Stay of General Surgery Patients: A Supervised Learning Approach, International Transactions in Operational Research, 25 (1) (2018) 75-90',	'2018',	'雅涵',	'journal',	NULL,	NULL),
(11,	'Pei-Ju Lee, Ya-Han Hu*, Kuan-Ting Lu, Assessing the helpfulness of online hotel reviews: A classification-based approach, Telematics and Informatics, 35 (2), (2018), 436-445',	'2018',	'雅涵',	'journal',	NULL,	NULL),
(12,	'Sheng-Feng Sung, Kuanchin Chen, Darren Philbert Wu, Ling-Chien Hung, Yu-Hsiang Su, Ya-Han Hu*, Applying natural language processing techniques to develop a task-specific EMR interface for timely stroke thrombolysis: A feasibility study',	'2018',	'雅涵',	'journal',	NULL,	NULL),
(13,	'Ya-Han Hu*, Yen-Liang Chen, Hui-Ling Chou, Opinion mining from online hotel reviews - A text summarization approach, Information Processing & Management, 53 (2) (2017) 436-449',	'2017',	'雅涵',	'journal',	NULL,	NULL),
(14,	'Cheng-Yang Hsieh, Huey-Juan Lin, Ya-Han Hu*, Sheng-Feng Sung, Stroke severity may predict causes of readmission within one year in patients with first ischemic stroke event, Journal of the Neurological Sciences, 372 (2017) 21-27',	'2017',	'雅涵',	'journal',	NULL,	NULL),
(15,	'Ya-Han Hu, Kuanchin Chen, Pei-Ju Lee, The Effect of User Controllable Filters on the Prediction of Online Hotel Reviews, Information & Management, 54 (6) (2017) 728-744',	'2017',	'雅涵',	'journal',	NULL,	NULL),
(16,	'Lin, W.-C., Tsai, C.-F.*, Ya-Han Hu, and Jing-Shang Jhang, Clustering-Based Undersampling for Class-imbalanced Data. Information Sciences, 409-410 (2017) 17-26',	'2017',	'雅涵',	'journal',	NULL,	NULL),
(17,	'Li-Chen Cheng, Ya-Han Hu*, Shr-Han Chiou, Applying the temporal abstraction technique to the prediction of chronic kidney disease progression, Journal of Medical Systems, 41 (2017) 85',	'2017',	'雅涵',	'journal',	NULL,	NULL),
(18,	'Ya-Han Hu, Chun-Tien Tai, Solomon Chih-Cheng Chen, Hai-Wei Lee, Sheng-Feng Sung*, Predicting Return Visits to the Emergency Department for Pediatric Patients: Applying Supervised Learning Techniques to the Taiwan National Health Insurance Research Database, Computer Methods and Programs in Biomedicine, 144 (2017) 105-112',	'2017',	'雅涵',	'journal',	NULL,	NULL),
(19,	'Ling-Chien Hung, Sheng-Feng Sung, Cheng-Yang Hsieh, Ya-Han Hu, Huey-Juan Lin, Yu-Wei Chen, Yea-Huei Kao Yang, Sue-Jane Lin. Validation of a Novel Claims-Based Stroke Severity Index in Patients with Intracerebral Hemorrhage, Journal of Epidemiology, 27 (1) (2017) 24-29. (SCI)',	'2017',	'雅涵',	'journal',	NULL,	NULL),
(20,	'Fan Wu, Ya-Han Hu*, Ping-Rong Wang, Developing a Novel Recommender Network-Based Ranking Mechanism for Library Book Acquisition, The Electronic Library, 35 (1) (2017) 50-68. (MOST 104-2410-H-194-070-MY3) (SSCI)',	'2017',	'雅涵',	'journal',	NULL,	NULL),
(21,	'Cheng-Che Shen, Li-Yu Hu, Ya-Han Hu*, Comorbidity study of borderline personality disorder: applying association rule mining to the Taiwan national health insurance research database, BMC Medical Informatics and Decision Making, 17 (1) (2017) 8. (SCI/SSCI)',	'2017',	'雅涵',	'journal',	NULL,	NULL),
(22,	'Ke, S.-W., Lin, W.-C.*, Tsai, C.-F., and Ya-Han Hu (2017) Soft Estimation by Hierarchical Classification and Regression, 234 (2017/4) 27-37. Neurocomputing. (SCI)',	'2017',	'雅涵',	'journal',	NULL,	NULL),
(23,	'Ya-Han Hu*, Kuanchin Chen, Predicting hotel review helpfulness: the impact of review visibility, and interaction between hotel stars and review ratings, International Journal of Information Management, 36 (6) (2016) 929-944. (SSCI; IF=2.692; 8/86 in INFORMATION SCIENCE & LIBRARY SCIENCE)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(24,	'Ya-Han Hu*, Kuanchin Chen, Pei-Ju Lee, The Effect of User Controllable Filters on the Prediction of Online Hotel Reviews, Information & Management, accepted. (SSCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(25,	'Cheng-Che Shen, Li-Yu Hu, Shih-Jen Tsai, Albert C. Yang, Ya-Han Hu*, Risk Stratification for the Early Diagnosis of Borderline Personality Disorder Using Psychiatric Comorbidities, Early Intervention in Psychiatry, accepted. (SSCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(26,	'Fan Wu, Ya-Han Hu*, Ping-Rong Wang, Developing a Novel Recommender Network-Based Ranking Mechanism for Library Book Acquisition, The Electronic Library, (2016), accepted. (SSCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(27,	'Ling-Chien Hung, Sheng-Feng Sung, Cheng-Yang Hsieh, Ya-Han Hu, Huey-Juan Lin, Yu-Wei Chen, Yea-Huei Kao Yang, Sue-Jane Lin. Validation of a Novel Claims-Based Stroke Severity Index in Patients with Intracerebral Hemorrhage, Journal of Epidemiology, accepted. (SCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(28,	'Mao-Te Chuang, Ya-Han Hu, Chia-Lun Lo*, Predicting the Prolonged Length of Stay of General Surgery Patients: A Supervised Learning Approach, International Transactions in Operational Research, accepted. (SSCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(29,	'Cheng-Yang Hsieh, Huey-Juan Lin, Ya-Han Hu, Sheng-Feng Sung, Stroke severity may predict causes of readmission within one year in patients with first ischemic stroke event, Journal of the Neurological Sciences, 372 (2017) 21-27. (SCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(30,	'Sung, S. F., Hsieh, C. Y., Lin, H. J., Chen, Y. W., Chen, C. H., Kao Yang, Y. H., & Ya-Han Hu*. Validity of a stroke severity index for administrative claims data research: a retrospective cohort study. BMC Health Services Research, 16:509. (SCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(31,	'胡雅涵、翁政雄*、楊亞澄，運用關聯規則及改變探勘技術於防火牆政策規則優化，資訊管理學報，23 (3) (2016) 277-304。(2016) (TSSCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(32,	'Shen, C.-C., Ya-Han Hu, Lin, W.-C., Tsai, C.-F.*, and Ke, S.-W. Research Impacts of General and Funded Papers: A Citation Analysis of Two ACM International Conference Proceeding Series. Online Information Review, 40 (4) (2016) 472-480. (SSCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(33,	'Ti Lu, Ya-Han Hu*, Chih-Fong Tsai, Shih-Ping Liu, Pei-Ling Chen, Applying Machine Learning Techniques to the Identification of Late-Onset Hypogonadism in Elderly Men, SpringerPlus, 5 (2016) 729. (SCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(34,	'Sheng-Feng Sung, Solomon Chih-Cheng Chen, Cheng-Yang Hsieh, Chung-Yi Li, Edward Chia-Cheng Lai, Ya-Han Hu*, A comparison of stroke severity proxy measures for claims data research: A population-based cohort study, Pharmacoepidemiology and Drug Safety, 25 (2016) 438-443. (SCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(35,	'Li-Yu Hu, Ya-Han Hu, Chih-Fong Tsai, Jian-Shian Wang, Min-Wei Huang*, Building an associative classifier with multiple minimum supports, SpringerPlus, 5 (2016) 528. (SCI)',	'2016',	'雅涵',	'journal',	NULL,	NULL),
(36,	'Chih-Fong Tsai, Ya-Han Hu*, and Yu-Hsin Lu, Customer segmentation issues and strategies for an automobile dealership with two clustering techniques, Expert Systems, 2014, accepted. (SCI)',	'2015',	'雅涵',	'journal',	NULL,	NULL),
(37,	'Chih-Fong Tsai, Ya-Han Hu, and Zong-Yao Chen, Factors Affecting Rocchio Based Pseudo Relevance Feedback in Image Retrieval. Journal of the American Society for Information Science and Technology, 2014, accepted. (SSCI)',	'2015',	'雅涵',	'journal',	NULL,	NULL),
(38,	'Ya-Han Hu*, Chih-Fong Tsai, Chun-Tien Tai, In-Chi Chiang, A novel approach for mining cyclically repeated patterns with multiple minimum supports, Applied Soft Computing, 28 (2015) 90-99. (SCI)',	'2015',	'雅涵',	'journal',	NULL,	NULL),
(39,	'Ya-Han Hu, WC Lin, CF Tsai, SW Ke, CW Chen, An efficient data preprocessing approach for large scale medical data mining, Technology and Health Care, 23 (2015) 153-160. (SCI)',	'2015',	'雅涵',	'journal',	NULL,	NULL),
(40,	'胡雅涵、李彥賢、林正賢，結合社會性標籤及文獻內容於個人化學術文章推薦，資訊管理學報，22 (2) (2015) 171-198。(TSSCI) (NSC 102-2410-H-194-104-MY2)',	'2015',	'雅涵',	'journal',	NULL,	NULL),
(41,	'Kuanchin Chen, Ya-Han Hu*, and Yi-Cheng Hsieh, Predicting Customer Churn from Valuable B2B Customers in Logistic Industry: A case study, Information Systems and e-Business Management, 13 (3) (2015) 475-494. (SSCI)',	'2015',	'雅涵',	'journal',	NULL,	NULL),
(42,	'Chen, C.-W., Lin, W.-C., Ke, S.-W., Tsai, C.-F.*, and Ya-Han Hu. On Mining Incomplete Medical Datasets: Ordering Imputation and Classification. Technology and Health Care, 23 (2015) 619-625. (SCI)',	'2015',	'雅涵',	'journal',	NULL,	NULL),
(43,	'Ling-Chien Hung, Ya-Han Hu and Sheng-Feng Sung, Exploring the impact of intravenous thrombolysis on length of stay for acute ischemic stroke: a retrospective cohort study, BMC Health Services Research, 15:404 (2015). (SCI)',	'2015',	'雅涵',	'journal',	NULL,	NULL),
(44,	'Sung, S. F., Hsieh, C. Y., Yang, Y. H. K., Lin, H. J., Chen, C. H., Chen, Y. W., & Ya-Han Hu*. Developing a stroke severity index based on administrative data was feasible using data mining techniques. Journal of Clinical Epidemiology, 68 (2015) 1292-1300. (SCI)',	'2015',	'雅涵',	'journal',	NULL,	NULL),
(45,	'Sheng-Feng Sung, Kang Ernest Liu, Solomon Chih-Cheng Chen, Chia-Lun Lo, Kuei-Chih Lin, Ya-Han Hu*, Predicting Factors and Risk Stratification for Return Visits in Children to the Emergency Department within 72 Hours, Pediatric Emergency Care, 31 (12) (2015) 819-824. (SCI)',	'2015',	'雅涵',	'journal',	NULL,	NULL),
(46,	'謝宛芷、胡雅涵，運用文字探勘技術於資安事件之自動化分類，電腦稽核，29 (2014) 92-101。',	'2014',	'雅涵',	'journal',	NULL,	NULL),
(47,	'Kang Ernest Liu, Chia-Lun Lo, Ya-Han Hu*, Improvement of adequate use of warfarin for the elderly using decision tree-based approaches, Methods of Information in Medicine, 52 (6) (2014). (SCI) (NSC 99-2410-H-194-065)',	'2014',	'雅涵',	'journal',	NULL,	NULL),
(48,	'Ya-Han Hu*, Tzu-Wei Yeh, Discovering valuable frequent patterns based on RFM analysis without customer identification information, Knowledge-Based Systems, 61 (2014) 76-88. (SCI)',	'2014',	'雅涵',	'journal',	NULL,	NULL),
(49,	'Ya-Han Hu, Chia-Lun Lo, Sheng-Pao Shih*, Developing early warning systems to predict students\' online learning performance, Computers in Human Behavior, 36 (2014) 469-478. (SSCI)',	'2014',	'雅涵',	'journal',	NULL,	NULL),
(50,	'Hsu-Che Wu, Ya-Han Hu*, Yen-Hao Huang, Two-stage credit rating prediction using machine learning techniques, Kybernetes, 43 (7) (2014) 1098-1113. (SCI)',	'2014',	'雅涵',	'journal',	NULL,	NULL),
(51,	'Chih-Fong Tsai, Ya-Han Hu, and Ke, S.-W. (2014) A Borda Count Approach to Combine Subjective and Objective based MIS Journal Rankings. Online Information Review, 38 (4) (2014) 469-483. (SSCI)',	'2014',	'雅涵',	'journal',	NULL,	NULL),
(52,	'胡雅涵、黃正魁、楊承翰，以基因演算法為基礎建立自動化文件分類模式，資訊管理學報，21 (3) (2014) 305-340。(TSSCI)',	'2014',	'雅涵',	'journal',	NULL,	NULL),
(53,	'Ke, S.-W., Lin, W.-C., Tsai, C.-F., and Ya-Han Hu (2014) Citation Impact Analysis of Research Papers that Appear in Oral and Poster Sessions: A Case Study of Three Computer Science Conferences. Online Information Review, 38 (6) (2014) 738-745. (SSCI)',	'2014',	'雅涵',	'journal',	NULL,	NULL),
(54,	'Man-Ling Chen, Zhi-Yuan Su, Chia-Lun Lo, Chiung-Hsuan Chiu, Ya-Han Hu, Tien-Yu Shieh, An empirical study on the factors influencing the turnover intention of dentists in hospitals in Taiwan, Journal of Dental Sciences, 9 (4) (2014) 332-344. (SCI)',	'2014',	'雅涵',	'journal',	NULL,	NULL),
(55,	'Shin-Yuan Hung, Ya-Han Hu, Chin-S. Ou, Kuanchin Chen, Chun-Chuan Lu, The Influence of IT Investment on Business Performance: A Comparative Study of Regression Analysis and Artificial Neural Networks, Pacific Asia Journal of the Association for Information Systems, accepted, 2013.',	'2013',	'雅涵',	'journal',	NULL,	NULL),
(56,	'Man-Ling Chen, Zhi-Yuan Su, Chia-Lun Lo, Chiung-Hsuan Chiu, Ya-Han Hu, Tien-Yu Shieh, An empirical study on the factors influencing the turnover intention of dentists in hospitals in Taiwan, Journal of Dental Sciences, accepted (2013). (SCI)',	'2013',	'雅涵',	'journal',	NULL,	NULL),
(57,	'羅家倫、胡雅涵、吳帆，以全人觀點設計一個之機構式老人照護資訊管理系統，醫療資訊雜誌，已接受，(2013)。 Ya-Han Hu, Fan Wu, Yi-Jiun Liao, An efficient tree-based algorithm for mining sequential patterns with multiple minimum supports, Journal of Systems and Software, 86 (5) (2013) 1224-1238. (SCI) (NSC 98-2410-H-194-054)',	'2013',	'雅涵',	'journal',	NULL,	NULL),
(58,	'Ya-Han Hu, Tony Cheng-Kui Huang, Yu-Hua Kao, Knowledge discovery of weighted RFM sequential patterns from customer sequence databases, Journal of Systems and Software, 86 (3) (2013) 779-788. (SCI) (NSC 100-2410-H-194-024-MY2)',	'2013',	'雅涵',	'journal',	NULL,	NULL),
(59,	'F. Wu, H-T. Pai, X. Zhu, P-Y. Hsueh, Ya-Han Hu, An Adaptable and Scalable Group Access Control Scheme for Managing Wireless Sensor Networks, Telematics and Informatics, 30 (2) (2013) 144-157. (SSCI)',	'2013',	'雅涵',	'journal',	NULL,	NULL),
(60,	'Chih-Fong Tsai, Ya-Han Hu, Chia-Sheng Hung, Yu-Feng Hsu, A Comparative Study of Hybrid Machine Learning Techniques for Customer Lifetime Value Prediction, Kybernetes, 42 (3) (2013) 357-370. (SCI)',	'2013',	'雅涵',	'journal',	NULL,	NULL),
(61,	'Ya-Han Hu, Chia-Lun Lo, Feng-I Chung, Applying RFM Analysis to Library-Book Recommender Systems, Communications of ICISA, 13 (2) (2012) 79-95.',	'2012',	'雅涵',	'journal',	NULL,	NULL),
(62,	'Ya-Han Hu, Fan Wu*, Chia-Lun Lo, Chun-Tien Tai, Predicting Warfarin Dosage from Clinical Data: A Supervised Learning Approach, Artificial Intelligence in Medicine, 56 (1) (2012) 27-34. (SCI) (NSC 98-2410-H-194-054)',	'2012',	'雅涵',	'journal',	NULL,	NULL),
(63,	'W.-Y. Lin, Ya-Han Hu, and C.-F. Tsai*, Machine Learning in Financial Crisis Prediction: A Survey. IEEE Transactions on Systems, Man and Cybernetics – Part C, 42 (4) (2012) 421-436. (SCI, SSCI)',	'2012',	'雅涵',	'journal',	NULL,	NULL),
(64,	'Ya-Han Hu, Yen-Liang Chen*, and Kwei Tang, Sequential Pattern Mining in Business-to-Business (B2B) Environment, Journal of Information Science, 35 (6) (2009) 677-694. (SSCI).',	'2009',	'雅涵',	'journal',	NULL,	NULL),
(65,	'Ya-Han Hu, Tony Cheng-Kui Huang*, Hui-Ru Yang, and Yen-Liang Chen, On Mining Multi-Time-Interval Sequential Patterns, Data and Knowledge Engineering, 68 (10) (2009) 1112-1127. (SCI) (NSC 97-2410-H-309 -020)',	'2009',	'雅涵',	'journal',	NULL,	NULL),
(66,	'Ya-Han Hu and Yen-Liang Chen* (2006), Mining association rules with multiple minimum supports: a new mining algorithm and a support tuning mechanism, Decision Support Systems, 42 (1) 1-24. (SCI)',	'2006',	'雅涵',	'journal',	NULL,	NULL),
(67,	'Yen-Liang Chen* and Ya-Han Hu (2006), Constraint-based sequential pattern mining: The consideration of recency and compactness, Decision Support Systems, 42 (2) 1203-1215. (SCI)',	'2006',	'雅涵',	'journal',	NULL,	NULL),
(68,	'Yen-Liang Chen*, Jhong-Jhih Wei, Shin-Yi Wu, and Ya-Han Hu (2006), A similarity-based method for retrieving documents from the SCI/SSCI database, Journal of Information Science, 32 (5) 449-464. (SSCI)',	'2006',	'雅涵',	'journal',	NULL,	NULL),
(69,	'Yen-Liang Chen*, Kwei Tang, Ren-Jie Shen and Ya-Han Hu (2005), Market basket analysis in a multiple store environment, Decision Support Systems, 40 (2) 339-354. (SCI)',	'2005',	'雅涵',	'journal',	NULL,	NULL),
(70,	'Ya-Han Hu, Kuanchin Chen, Pei-Ju Lee (accepted 2016, Dec). The Effect of User Controllable Filters on the Prediction of Online Hotel Reviews. Information and Management. (In Press) (SCI)',	'2016',	'珮如',	'journal',	NULL,	NULL),
(71,	'Peng-Sheng You, Pei-Ju Lee, Yi-Chih Hsieh (accepted 2016, Nov). An artificial intelligent approach to the bicycle repositioning problems, Engineering Computations. (In Press) (SCI)',	'2016',	'珮如',	'journal',	NULL,	NULL),
(72,	'Pei-Ju Lee, Peng-Sheng You, Yu-Chih Huang, Yi-Chih Hsieh (accepted 2016, Nov). Inconsistency detection and data fusion in USAR task, Engineering Computations. (In Press) (SCI)',	'2016',	'珮如',	'journal',	NULL,	NULL),
(73,	'Pei-Ju Lee, Yi-Chih Hsieh, Yung-Cheng Lee (2016, Dec). Active Inconsistency Detection in Data Integration. ICIC Express Letters, 10(12), 2829-2835. (EI)',	'2016',	'珮如',	'journal',	NULL,	NULL),
(74,	'Yi-Chih Hsieh, Pei-Ju Lee, Peng-Sheng You (2016, Sep) An approximated linear programming approach for media resource allocation problem. ICIC Express Letters, 7(9), 1945-1959. (EI)',	'2016',	'珮如',	'journal',	NULL,	NULL),
(75,	'Yung-Cheng Lee, Pei-Ju Lee (2015, May). Cryptanalysis of Ahirwal-Sonwanshi Id-Based Remote User Authentication Scheme. Applied Mechanics and Materials. (EI).',	'2015',	'珮如',	'journal',	NULL,	NULL),
(76,	'Yi-Chih Hsieh, Peng-Sheng You, Pei-Ju Lee, Yung-Cheng Lee (2015, Apr). A novel encoding scheme based evolutionary approach for the bi-objective grid patrol routing problem with multiple vehicles. Scientia Iranica B, 22, 1576-1585. (SCI)',	'2015',	'珮如',	'journal',	NULL,	NULL),
(77,	'Lee, Y., Hsieh, Y., You, P. & Lee, P. (2014) Security Enhancement of User Authentication Scheme for Wireless Sensor Networks. ICIC Express Letters, 2014; 5(2), 327-332. (EI)',	'2015',	'珮如',	'journal',	NULL,	NULL),
(78,	'Lee, Y., Hsieh, Y., Lee, P., & You, P. (2014) Improvement of the ElGamal Based Remote Authentication Scheme Using Smart Cards. Journal of Applied Research and Technology, 2014; 12(6), 1063-1072. (SCIE)',	'2015',	'珮如',	'journal',	NULL,	NULL),
(79,	'Scerri, P., Ma, Z., Chien, S., Wang, H., Lee, P., Lewis, M. & Sycara, K. (2011) An Initial Evaluation of Approaches to Building Entry for Large Robot Teams. Journal of Intelligent and Robotic Systems. 2011; 64 (2): 145-159. (SCIE)',	'2011',	'珮如',	'journal',	NULL,	NULL);



-- 2021-03-03 06:14:23
