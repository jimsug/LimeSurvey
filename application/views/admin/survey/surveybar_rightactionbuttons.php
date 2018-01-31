<?php

/**
 * Subview of surveybar_view.
 */

?>

<div class=" col-md-4 text-right">
    <?php if (isset($surveybar['savebutton']['form'])):?>

        <!-- Save -->
        <a class="btn btn-success" href="#" role="button" id="save-button" >
            <span class="fa fa-floppy-o"></span>
            <?php if (isset($surveybar['savebutton']['text']))
            {
                echo $surveybar['savebutton']['text'];
            }
            else {
                eT("Save");
            }?>
        </a>
        <?php if (isset($surveybar['importquestiongroup'])):?>
            <?php
                //Save and new button
                $paramArray = array();
                $paramArray["surveyid"] = $surveyid;
                $saveAndNewLink = $this->createUrl("admin/questiongroups/sa/add/", $paramArray);
                $saveAndAddQuestionLink = $this->createUrl("admin/questions/sa/newquestion/", $paramArray);
            ?>

            <a class="btn btn-success" id='save-and-new-question-button' href="<?php echo $saveAndAddQuestionLink ?>" role="button">
                <span class="fa fa-floppy-o"></span>
                <?php eT("Save and add question"); ?>
            </a>

            <a class="btn btn-success" id='save-and-new-button' href="<?php echo $saveAndNewLink ?>" role="button">
                <span class="fa fa-floppy-o"></span>
                <?php eT("Save and new group"); ?>
            </a>
        <?php endif; ?>
        <?php if (isset($surveybar['importquestion'])):?>
            <?php
                //Save and new button
                $paramArray = array();
                $paramArray["surveyid"] = $surveyid;

                if (isset($gid) && !empty($gid)) 
                    $paramArray["gid"] = $gid;

                $saveAndNewLink = $this->createUrl("admin/questions/sa/newquestion/", $paramArray);
            ?>

            <a class="btn btn-success" id='save-and-new-button' href="<?php echo $saveAndNewLink ?>" role="button">
                <span class="fa fa-floppy-o"></span>
                <?php eT("Save and new"); ?>
            </a>
        <?php endif; ?>
    <?php endif; ?>
        <?php /*
        <!-- Save and close -->
        <?php if(isset($surveybar['saveandclosebutton'])):?>
            <a class="btn btn-default" href="#" role="button" id='save-and-close-button'>
                <span class="fa fa-saved"></span>
                <?php eT("Save and close");?>
            </a>
        <?php endif; ?>
    */ ?>

    <?php /*
    <!-- Close -->
    <?php if(isset($surveybar['closebutton']['url'])):?>
        <a class="btn btn-danger" href="<?php echo $surveybar['closebutton']['url']; ?>" role="button">
            <span class="fa fa-close"></span>
            <?php eT("Close");?>
        </a>
    <?php endif;?>
    */ ?>

</div>
