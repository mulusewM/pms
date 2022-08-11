
	
<table style="margin-left:10%;margin-top:2%">
	<?php                       
	                        $sql = "select * from store";
	                        $query = mysql_query($sql);
		                    $result = mysql_num_rows($query);
           if($result>0)
		        {
				echo"<div style='margin-left:50px;margin-top:5px;'>";	
		while($row=mysql_fetch_array($query))
		                {
			$item_id=$row['drugID'];
			?>
		
		<p style="float:left; text-dicoration:none;"><a href='itemDetail.php?action=clear&id=<?php echo $item_id;?>'><span class="btn-">View Detail </u></span></a></p>
			</form>
			 <br/><br/>  </div> 		   
	             
			<?php 
			   }
			}
         echo" </div> ";
   
	   ?>
	       </table>					
			</td>
			</tr>
    </table>
		
</div>	  
</div>
                                                                        
</body>
</html>