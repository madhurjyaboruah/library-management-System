<?php
	function get_student_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$user_count = "";
		$query = "select count(*) as user_count from STUDENT";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];
		}
		return($user_count);
	}

	function get_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$book_count = "";
		$query = "select count(*) as book_count from BOOK";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$book_count = $row['book_count'];
		}
		return($book_count);
	}




	function get_journal_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$issued_book_count = "";
		$query = "select count(*) as journal_count from JOURNAL ";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$journal_count = $row['journal_count'];
		}
		return($journal_count);
	}

	function get_magazine_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$issued_book_count = "";
		$query = "select count(*) as journal_count from MAGAZINE ";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$journal_count = $row['journal_count'];
		}
		return($journal_count);
	}
?>