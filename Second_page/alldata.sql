SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `tb_data` (
  `id` int(11) NOT NULL,
  `actives` varchar(50) NOT NULL
  `is1` varchar(50) NOT NULL,
  `is2` varchar(50) NOT NULL,
  `is3` varchar(50) NOT NULL,
  `conf` varchar(50) NOT NULL,
  `integrity` varchar(50) NOT NULL,
  `avail` varchar(50) NOT NULL,
  `letter` varchar(50) NOT NULL,
  `pk` varchar(50) NOT NULL,
  `m` varchar(50) NOT NULL,
  `dsp` varchar(50) NOT NULL,
  `coninf` varchar(50) NOT NULL,
  `vrab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id`, 'department' `name`, `date`, 'actives', 'is1', 'is2', 'is3',
'is3', 'conf', 'integrity', 'avail', 'letter', 'pk','m',
'dsp', ' coninf','vtab') VALUES
(9, 'd', '12', 'UK', 'Male', 'English','Chinese','Spanish','gfjh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;