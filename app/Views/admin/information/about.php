<div class="container-fluid py-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= $title ?></h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="/information/saveAbout" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" value="<?= $data['id'] ?>">
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="oldBanner" value="<?= $json->banner ?>">
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="oldVisionImage" value="<?= $json->visionImage ?>">
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="oldVisionImage2" value="<?= $json->visionImage2 ?>">
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="oldVisionImage3" value="<?= $json->visionImage3 ?>">
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="oldTestimoni" value='<?= json_encode($json->testimoni) ?>'>
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="oldHighlights" value='<?= json_encode($json->highlights) ?>'>
                    <div class="mb-3">
                        <label for="image">Banner</label>
                        <div class="col-md-6">
                            <div class="file-wrapper">
                                <?php if (isset($json->banner)) : ?>
                                    <div class="file-input is-file">
                                        <i class="fas fa-file icon" style="display:none"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(0)}"></i>
                                        <img class="preview-content" src="<?= base_url('upload') ?>/about/<?= $json->banner ?>" />
                                    </div>
                                <?php else : ?>
                                    <div class="file-input">
                                        <i class="fas fa-file icon"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(0)}"></i>
                                    </div>
                                <?php endif; ?>
                                <input type="file" class="input-file" id="image" name="banner" accept="image/*" onchange="{handleChange(0)}" />

                            </div>

                            <div class="invalid-feedback">
                                <?= $validation->getError('banner') ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name">Banner Small Caption</label>
                        <input type="text" class="form-control" id="bannerSmallCaption" aria-describedby="bannerSmallCaption" name="bannerSmallCaption" placeholder="Banner Small Caption" <?php if (isset($json->bannerSmallCaption)) : ?> value="<?= $json->bannerSmallCaption ?>" <?php else : ?> <?php endif ?> required>
                    </div>
                    <div class="mb-3">
                        <label for="name">Banner Title</label>
                        <input type="text" class="form-control" id="bannerTitle" aria-describedby="bannerTitle" name="bannerTitle" placeholder="Banner Title" <?php if (isset($json->bannerTitle)) : ?> value="<?= $json->bannerTitle ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">About Small Label</label>
                        <input type="text" class="form-control" id="aboutSmallLabel" aria-describedby="aboutSmallLabel" name="aboutSmallLabel" placeholder="About Small Label" <?php if (isset($json->aboutSmallLabel)) : ?> value="<?= $json->aboutSmallLabel ?>" <?php else : ?> <?php endif ?> required>
                    </div>
                    <div class="mb-3">
                        <label for="name">About Title</label>
                        <input type="text" class="form-control" id="aboutTitle" aria-describedby="aboutTitle" name="aboutTitle" placeholder="About Title" <?php if (isset($json->aboutTitle)) : ?> value="<?= $json->aboutTitle ?>" <?php else : ?> <?php endif ?> required>
                    </div>
                    <div class="mb-3">
                        <label for="name">About Description</label>
                        <textarea id="basic-conf" name="aboutDescription" required>
                            <?php if (isset($json->aboutDescription)) : ?>
                                <?= $json->aboutDescription ?>
                            <?php endif; ?>
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="name">Culture Caption</label>
                        <input type="text" class="form-control" id="cultureCaption" aria-describedby="cultureCaption" name="cultureCaption" placeholder="Culture Caption" <?php if (isset($json->cultureCaption)) : ?> value="<?= $json->cultureCaption ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Culture Point Title 1</label>
                        <input type="text" class="form-control" id="culturePointTitle1" aria-describedby="culturePointTitle1" name="culturePointTitle1" placeholder="Culture Point Title 1" <?php if (isset($json->culturePointTitle1)) : ?> value="<?= $json->culturePointTitle1 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Culture Point Description 1</label>
                        <input type="text" class="form-control" id="culturePointDesc1" aria-describedby="culturePointDesc1" name="culturePointDesc1" placeholder="Culture Point Description 1" <?php if (isset($json->culturePointDesc1)) : ?> value="<?= $json->culturePointDesc1 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Culture Point Title 2</label>
                        <input type="text" class="form-control" id="culturePointTitle2" aria-describedby="culturePointTitle2" name="culturePointTitle2" placeholder="Culture Point Title 2" <?php if (isset($json->culturePointTitle2)) : ?> value="<?= $json->culturePointTitle2 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Culture Point Description 2</label>
                        <input type="text" class="form-control" id="culturePointDesc2" aria-describedby="culturePointDesc2" name="culturePointDesc2" placeholder="Culture Point Description 2" <?php if (isset($json->culturePointDesc2)) : ?> value="<?= $json->culturePointDesc2 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Culture Point Title 3</label>
                        <input type="text" class="form-control" id="culturePointTitle3" aria-describedby="culturePointTitle3" name="culturePointTitle3" placeholder="Culture Point Title 3" <?php if (isset($json->culturePointTitle3)) : ?> value="<?= $json->culturePointTitle3 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Culture Point Description 3</label>
                        <input type="text" class="form-control" id="culturePointDesc3" aria-describedby="culturePointDesc3" name="culturePointDesc3" placeholder="Culture Point Description 3" <?php if (isset($json->culturePointDesc3)) : ?> value="<?= $json->culturePointDesc3 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Culture Point Title 4</label>
                        <input type="text" class="form-control" id="culturePointTitle4" aria-describedby="culturePointTitle4" name="culturePointTitle4" placeholder="Culture Point Title 3" <?php if (isset($json->culturePointTitle4)) : ?> value="<?= $json->culturePointTitle4 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-4">
                        <label for="name">Culture Point Description 4</label>
                        <input type="text" class="form-control" id="culturePointDesc4" aria-describedby="culturePointDesc4" name="culturePointDesc4" placeholder="Culture Point Description 4" <?php if (isset($json->culturePointDesc4)) : ?> value="<?= $json->culturePointDesc4 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Why Bobil Title</label>
                        <input type="text" class="form-control" id="whyBobilTitle" aria-describedby="whyBobilTitle" name="whyBobilTitle" placeholder="Why Bobil Title" <?php if (isset($json->whyBobilTitle)) : ?> value="<?= $json->whyBobilTitle ?>" <?php else : ?> <?php endif ?> required>
                    </div>
                    <div class="mb-3">
                        <label for="name">Why Bobil Subtitle</label>
                        <input type="text" class="form-control" id="whyBobilSubtitles" aria-describedby="whyBobilSubtitles" name="whyBobilSubtitles" placeholder="Why Bobil Subtitles" <?php if (isset($json->whyBobilSubtitles)) : ?> value="<?= $json->whyBobilSubtitles ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Vision Caption</label>
                        <input type="text" class="form-control" id="visonCaption" aria-describedby="visonCaption" name="visonCaption" placeholder="Vison Caption" <?php if (isset($json->visonCaption)) : ?> value="<?= $json->visonCaption ?>" <?php else : ?> <?php endif ?> required>
                    </div>
                    <div class="mb-3">
                        <label for="name">Vision Title</label>
                        <input type="text" class="form-control" id="visionTitle" aria-describedby="visionTitle" name="visionTitle" placeholder="Vision Title" <?php if (isset($json->visionTitle)) : ?> value="<?= $json->visionTitle ?>" <?php else : ?> <?php endif ?> required>
                    </div>
                    <div class="mb-3">
                        <label for="name">Vision Subtitle</label>
                        <input type="text" class="form-control" id="visionSubtitles" aria-describedby="visionSubtitles" name="visionSubtitles" placeholder="Vision Subtitle" <?php if (isset($json->visionSubtitles)) : ?> value="<?= $json->visionSubtitles ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Vision Point Title 1</label>
                        <input type="text" class="form-control" id="visionPointTitle1" aria-describedby="visionPointTitle1" name="visionPointTitle1" placeholder="Vision Point Title 1" <?php if (isset($json->visionPointTitle1)) : ?> value="<?= $json->visionPointTitle1 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Vision Point Description 1</label>
                        <input type="text" class="form-control" id="visionPointDesc1" aria-describedby="visionPointDesc1" name="visionPointDesc1" placeholder="Vision Point Description 1" <?php if (isset($json->visionPointDesc1)) : ?> value="<?= $json->visionPointDesc1 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Vision Point Title 2</label>
                        <input type="text" class="form-control" id="visionPointTitle2" aria-describedby="visionPointTitle2" name="visionPointTitle2" placeholder="Vision Point Title 2" <?php if (isset($json->visionPointTitle2)) : ?> value="<?= $json->visionPointTitle2 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Vision Point Description 2</label>
                        <input type="text" class="form-control" id="visionPointDesc2" aria-describedby="visionPointDesc2" name="visionPointDesc2" placeholder="Vision Point Description 2" <?php if (isset($json->visionPointDesc2)) : ?> value="<?= $json->visionPointDesc2 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Vision Point Title 3</label>
                        <input type="text" class="form-control" id="visionPointTitle3" aria-describedby="visionPointTitle3" name="visionPointTitle3" placeholder="Vision Point Title 3" <?php if (isset($json->visionPointTitle3)) : ?> value="<?= $json->visionPointTitle3 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Vision Point Description 3</label>
                        <input type="text" class="form-control" id="visionPointDesc3" aria-describedby="visionPointDesc3" name="visionPointDesc3" placeholder="Vision Point Description 3" <?php if (isset($json->visionPointDesc3)) : ?> value="<?= $json->visionPointDesc3 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-3">
                        <label for="name">Vision Point Title 4</label>
                        <input type="text" class="form-control" id="visionPointTitle4" aria-describedby="visionPointTitle4" name="visionPointTitle4" placeholder="Vision Point Title 4" <?php if (isset($json->visionPointTitle4)) : ?> value="<?= $json->visionPointTitle4 ?>" <?php else : ?> <?php endif ?> required>
                    </div>

                    <div class="mb-4">
                        <label for="name">Vision Point Description 4</label>
                        <input type="text" class="form-control" id="visionPointDesc4" aria-describedby="visionPointDesc4" name="visionPointDesc4" placeholder="Vision Point Description 4" <?php if (isset($json->visionPointDesc4)) : ?> value="<?= $json->visionPointDesc4 ?>" <?php else : ?> <?php endif ?> required>
                    </div>


                    <div class="mb-3">
                        <label for="image">Vision Image</label>
                        <div class="col-md-6">
                            <div class="file-wrapper">
                                <?php if (isset($json->visionImage)) : ?>
                                    <div class="file-input is-file">
                                        <i class="fas fa-file icon" style="display:none"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(1)}"></i>
                                        <img class="preview-content" src="<?= base_url('upload') ?>/about/<?= $json->visionImage ?>" />
                                    </div>
                                <?php else : ?>
                                    <div class="file-input">
                                        <i class="fas fa-file icon"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(1)}"></i>
                                    </div>
                                <?php endif; ?>
                                <input type="file" class="input-file" id="image" name="visionImage" accept="image/*" onchange="{handleChange(1)}" />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="name">Vision Caption With Image</label>
                        <input type="text" class="form-control" id="visonCaptionWithImage" aria-describedby="visonCaptionWithImage" name="visonCaptionWithImage" placeholder="Vison Caption With Image" <?php if (isset($json->visonCaptionWithImage)) : ?> value="<?= $json->visonCaptionWithImage ?>" <?php else : ?> <?php endif ?>>
                    </div>
                    <div class="mb-3">
                        <label for="name">Vision Title With Image</label>
                        <input type="text" class="form-control" id="visionTitleWithImage" aria-describedby="visionTitleWithImage" name="visionTitleWithImage" placeholder="Vision Title With Image" <?php if (isset($json->visionTitleWithImage)) : ?> value="<?= $json->visionTitleWithImage ?>" <?php else : ?> <?php endif ?>>
                    </div>
                    <div class="mb-3">
                        <label for="name">Vision Subtitle With Image</label>
                        <input type="text" class="form-control" id="visionSubtitlesWithImage" aria-describedby="visionSubtitlesWithImage" name="visionSubtitlesWithImage" placeholder="Vision Subtitle With Image" <?php if (isset($json->visionSubtitlesWithImage)) : ?> value="<?= $json->visionSubtitlesWithImage ?>" <?php else : ?> <?php endif ?>>
                    </div>


                    <div class="mb-3">
                        <label for="image">Vision Image 2</label>
                        <div class="col-md-6">
                            <div class="file-wrapper">
                                <?php if (isset($json->visionImage2)) : ?>
                                    <div class="file-input is-file">
                                        <i class="fas fa-file icon" style="display:none"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(2)}"></i>
                                        <img class="preview-content" src="<?= base_url('upload') ?>/about/<?= $json->visionImage2 ?>" />
                                    </div>
                                <?php else : ?>
                                    <div class="file-input">
                                        <i class="fas fa-file icon"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(2)}"></i>
                                    </div>
                                <?php endif; ?>
                                <input type="file" class="input-file" id="image" name="visionImage2" accept="image/*" onchange="{handleChange(2)}" />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="name">Vision Caption With Image 2</label>
                        <input type="text" class="form-control" id="visonCaptionWithImage2" aria-describedby="visonCaptionWithImage2" name="visonCaptionWithImage2" placeholder="Vison Caption With Image 2" <?php if (isset($json->visonCaptionWithImage2)) : ?> value="<?= $json->visonCaptionWithImage2 ?>" <?php else : ?> <?php endif ?>>
                    </div>
                    <div class="mb-3">
                        <label for="name">Vision Title With Image 2</label>
                        <input type="text" class="form-control" id="visionTitleWithImage2" aria-describedby="visionTitleWithImage2" name="visionTitleWithImage2" placeholder="Vision Title With Image 2" <?php if (isset($json->visionTitleWithImage2)) : ?> value="<?= $json->visionTitleWithImage2 ?>" <?php else : ?> <?php endif ?>>
                    </div>
                    <div class="mb-3">
                        <label for="name">Vision Subtitle With Image 2</label>
                        <input type="text" class="form-control" id="visionSubtitlesWithImage2" aria-describedby="visionSubtitlesWithImage2" name="visionSubtitlesWithImage2" placeholder="Vision Subtitle With Image 2" <?php if (isset($json->visionSubtitlesWithImage2)) : ?> value="<?= $json->visionSubtitlesWithImage2 ?>" <?php else : ?> <?php endif ?>>
                    </div>


                    <div class="mb-3">
                        <label for="image">Vision Image 3</label>
                        <div class="col-md-6">
                            <div class="file-wrapper">
                                <?php if (isset($json->visionImage3)) : ?>
                                    <div class="file-input is-file">
                                        <i class="fas fa-file icon" style="display:none"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(3)}"></i>
                                        <img class="preview-content" src="<?= base_url('upload') ?>/about/<?= $json->visionImage3 ?>" />
                                    </div>
                                <?php else : ?>
                                    <div class="file-input">
                                        <i class="fas fa-file icon"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(3)}"></i>
                                    </div>
                                <?php endif; ?>
                                <input type="file" class="input-file" id="image" name="visionImage3" accept="image/*" onchange="{handleChange(3)}" />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="name">Vision Caption With Image 3</label>
                        <input type="text" class="form-control" id="visonCaptionWithImage3" aria-describedby="visonCaptionWithImage3" name="visonCaptionWithImage3" placeholder="Vison Caption With Image 3" <?php if (isset($json->visonCaptionWithImage3)) : ?> value="<?= $json->visonCaptionWithImage3 ?>" <?php else : ?> <?php endif ?>>
                    </div>
                    <div class="mb-3">
                        <label for="name">Vision Title With Image 3</label>
                        <input type="text" class="form-control" id="visionTitleWithImage3" aria-describedby="visionTitleWithImage3" name="visionTitleWithImage3" placeholder="Vision Title With Image 3" <?php if (isset($json->visionTitleWithImage3)) : ?> value="<?= $json->visionTitleWithImage3 ?>" <?php else : ?> <?php endif ?>>
                    </div>
                    <div class="mb-3">
                        <label for="name">Vision Subtitle With Image 3</label>
                        <input type="text" class="form-control" id="visionSubtitlesWithImage3" aria-describedby="visionSubtitlesWithImage3" name="visionSubtitlesWithImage3" placeholder="Vision Subtitle With Image 3" <?php if (isset($json->visionSubtitlesWithImage3)) : ?> value="<?= $json->visionSubtitlesWithImage3 ?>" <?php else : ?> <?php endif ?>>
                    </div>
                    <div class="mb-3">
                        <label for="name">Title Highlight</label>
                        <input type="text" class="form-control" id="titleHighlight" aria-describedby="titleHighlight" name="titleHighlight" placeholder="Title Highlight" <?php if (isset($json->titleHighlight)) : ?> value="<?= $json->titleHighlight ?>" <?php else : ?> <?php endif ?>>
                    </div>


                    <!-- <div class="mb-3">
                        <label for="name">Slider Testimoni</label>
                        <input type="file" name="testimoni[]" class="form-control" id="file" multiple>
                    </div>


                    <div class="mb-3">
                        <label for="name">Slider Highlights</label>
                        <input type="file" name="highlight[]" class="form-control" id="file" multiple>
                    </div> -->
                    <div class="mb-3">
                        <div class="d-flex p-2 justify-content-between align-items-center">
                            <label for="name">Slider Testimoni</label>
                            <div class="btn btn-info" onclick="{addDynamicFile('#testimoniSlider','testimoni')}">Add</div>
                        </div>
                        <input type="hidden" name="testimoni[]" class="form-control" id="file" multiple>
                        <div class="input-multi-wrapper">
                            <div class="d-flex" id="testimoniSlider">
                                <?php if (isset($json->testimoni)) : ?>
                                    <?php foreach ($json->testimoni as $key => $testimoni) : ?>
                                        <div class="col-md-2">
                                            <div class="file-wrapper">
                                                <?php if (isset($testimoni)) : ?>
                                                    <div class="file-input file-testimoni is-file">
                                                        <i class="fas fa-file icon icon-testimoni" style="display:none"></i>
                                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDeleteDynamic('.file-testimoni','.preview-testimoni','.icon-testimoni',<?= $key ?>,'#image-testimoni','testimoni')}"></i>
                                                        <img class="preview-content preview-testimoni" src="<?= base_url('upload') ?>/about/<?= $testimoni ?>" />
                                                    </div>
                                                <?php else : ?>
                                                    <div class="file-input filte-testimoni">
                                                        <i class="fas fa-file icon icon-testimoni"></i>
                                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDeleteDynamic('.file-testimoni','.preview-testimoni','.icon-testimoni',<?= $key ?>,'#image-testimoni','testimoni')}"></i>
                                                    </div>
                                                <?php endif; ?>
                                                <input type="file" value="<?= base_url('upload') ?>/about/<?= $testimoni ?>" class="input-file input-testimoni" id="image-testimoni" name="testimoni[]" accept="image/*" onchange="{handleChangeDynamic('.input-testimoni','.file-testimoni','.icon-testimoni','preview-testimoni',<?= $key ?>,'#image-testimoni','testimoni')}" multiple />
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex p-2 justify-content-between align-items-center">
                            <label for="name">Slider Highlights</label>
                            <div class="btn btn-info" onclick="{addDynamicFile('#higlightSlider','highlights')}">Add</div>
                        </div>
                        <input type="hidden" name="highlight[]" class="form-control" id="file" multiple>
                        <div class="input-multi-wrapper">
                            <div class="d-flex flex-wrap" id="higlightSlider">
                                <?php if (isset($json->highlights)) : ?>
                                    <?php foreach ($json->highlights as $key => $highlight) : ?>
                                        <div class="col-md-2">
                                            <div class="file-wrapper">
                                                <?php if (isset($highlight)) : ?>
                                                    <div class="file-input file-highlight is-file">
                                                        <i class="fas fa-file icon icon-highlight" style="display:none"></i>
                                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDeleteDynamic('.file-highlight','.preview-highlight','.icon-highlight',<?= $key ?>,'#image-highlight','highlight')}"></i>
                                                        <img class="preview-content preview-highlight" src="<?= base_url('upload') ?>/about/<?= $highlight ?>" />
                                                    </div>
                                                <?php else : ?>
                                                    <div class="file-input file-highlight">
                                                        <i class="fas fa-file icon icon-highlight"></i>
                                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDeleteDynamic('.file-highlight','.preview-highlight','.icon-highlight',<?= $key ?>,'#image-highlight','highlight')}"></i>
                                                    </div>
                                                <?php endif; ?>
                                                <input type="file" class="input-file input-highlight" id="image-highlight" name="highlight[<?= $key ?>]" accept="image/*" onchange="{handleChangeDynamic('.input-highlight','.file-highlight','.icon-highlight','preview-highlight',<?= $key ?>,'#image-highlight','highlight')}" multiple />
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </div>

                        </div>
                    </div>


                    <div class="float-end">
                        <button type="submit" class="btn btn-de-primary">Submit</button>
                        <a href="/admin" class="btn btn-de-danger">Cancel</a>
                    </div>

                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div>