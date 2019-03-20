<?php if(!defined('ROOT_PATH')) die('Can not access'); ?>

<div class="col-md-10 column" id="content-data">
	<h1>Quiz Questions !</h1>
	<?php if($question): ?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				<?= $question['name_question']; ?>
			</h3>
			<input type="hidden" name="idQuestion" id="idQuestion" value="<?= $question['id']; ?>">
		</div>
		<div class="panel-body">
			<?php foreach($answers as $key => $item): ?>
			<div class="radio">
				<label>

					<input type="radio" name="optionsRadios" id="optionsRadios<?= $item['id']; ?>" value="<?= $item['id']; ?>">
					<?= $item['name_answer']; ?>
				</label>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-sm-12 col-md-2">
					<button class="btn btn-primary btn-block confirm" role="button">Xác nhận</button>
				</div>
				<div class="col-sm-12 col-md-2">
					<button class="btn btn-default btn-block disabled next" role="button">Tiếp theo</button>
				</div>
			</div>
		</div>
	</div>
	<?php else: ?>
	<div class="panel panel-primary">
		<h3 class="px-3">Chúc mừng bạn đã trả lời đúng hết tất cả các câu hỏi !</h3>
	</div>
	<?php endif; ?>
</div>
<script type="text/javascript">
	// xu ly ajax de tra loi cau hoi
	$(function(){
		// Ham khoi tao - nghia la cho doi ma html va css duoc load xong thi cac cau lenh JQ moi dc thuc thi 
		// bat su kien click vao nut xac nhan
		// mac dinh ban dau khoa nut tiep theo
		$('.next').addClass('disabled');
		$('.next').attr('disabled', true);
		$('.confirm').click(function(){

			// can lay dc cau tra loi cua nguoi dung
			let answer = $.trim($('input[name="optionsRadios"]:checked').val());
			let question = $.trim($('#idQuestion').val());

			if($.isNumeric(answer)){
				// xu ly ajax de tra loi cau hoi
				$.ajax({
					url : "?c=home&m=answerQuestion",
					type: "POST",
					data: {idAnswer: answer, idQuestion: question},
					beforeSend: function(){
						$('#loading-data').show();
					},
					success: function(result){
						// an thong bao send data
						$('#loading-data').hide();
						$("div.radio").css('background-color', 'white');
						// result : ket qua ben phia server tra ve
						result = $.trim(result);
						if(result == 0){
							alert('Dap an khong chinh xac');
							$("input[name='optionsRadios']:checked").parent().parent().css('background-color', 'red');
							$('.next').addClass('disabled');
							$('.next').attr('disabled', true);
						} else if (result == 1) {
							alert('Dan an chinh xac');
							$("input[name='optionsRadios']:checked").parent().parent().css('background-color', 'yellow');
							// cho phep nut tiep theo dc bam
							$('.next').removeClass('disabled');
							$('.next').attr('disabled', false);
						} else {
							alert('Vui long chon lai dap an');
							$('.next').addClass('disabled');
							$('.next').attr('disabled', true);
						}
						return false;
					}
				});
			} else {
				alert('Vui long chon cau tra loi');
				return false;
			}
		});

		// xu ly load next question
		$('.next').click(function(){
			let question = $.trim($('#idQuestion').val());
			// loai tru bo di chinh cau hoi nay
			if($.isNumeric(question)){
				$.ajax({
					url: "?c=home&m=loadMoreQuestion",
					type: "POST",
					data: {id: question},
					beforeSend: function(){
						$('#loading-data').show();
					},
					success: function(res){
						$('#loading-data').hide();
						if(res){
							$('#content-data').html(res);
						}
						$('.next').addClass('disabled');
						$('.next').attr('disabled', true);
					}
				});
			}
		});
	});
</script>




