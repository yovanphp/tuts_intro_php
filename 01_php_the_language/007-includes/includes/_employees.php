<?php 
 require_once "utils/utility.php";
 $staff_members = [
 "programmers" 		=> ["John", "Jack", "Tim", "Corinne"],
 "managers"    		=> ["Anand", "Paul"],
 "administration" 	=> ["Tom", "Annette"]
 ]; 
?>
 <table>
 	<?php 
 		foreach ($staff_members as $positions => $position) :
 			foreach ($position as $employee) :
 	?>
			 	<tr>
			 		<th><?php echo formatPositions($positions); ?></th>
			 		<td><?php echo $employee; ?></td>
			 	</tr>
 			<?php endforeach ?>
 <?php endforeach ?>
 </table>
