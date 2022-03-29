SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `first_tb` (
  `id` int(111) NOT NULL,
  `department` varchar(555) NOT NULL,
  `name` varchar(555) NOT NULL,
  `date` varchar(555) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data for table `tb_data`
--

INSERT INTO `first_tb` (`id`, 'department' `name`, `date`) VALUES
(9, 'd', '12', 'UK');
--
-- Indexes for dumped tables
--
--
-- Indexes for table `tb_data`
--
ALTER TABLE `first_tb`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `first_tb`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
