<?php

namespace App\Controllers;

use App\Models\InformationModel;
use \stdClass;

class Information extends BaseController
{
    protected $auth;

    protected $model;

    public function __construct()
    {
        $this->auth = service('authentication');
        $this->model = new InformationModel();
    }


    public function index()
    {
        echo view('layouts/admin/header');
        echo view('welcome_message');
        echo view('layouts/admin/footer');
    }

    public function welcome()
    {
        $dataModel = $this->model->getData(1);
        $jsonData = json_decode($dataModel['json']);
        $data = [
            'title' => 'Welcome Page',
            'validation' =>  \Config\Services::validation(),
            'data' => $dataModel,
            'json' => $jsonData
        ];

        $this->render('admin/information/welcome', $data);
    }

    public function landing()
    {
        $dataModel = $this->model->getData(2);

        $jsonData = json_decode($dataModel['json']);

        $data = [
            'title' => 'Landing Page',
            'validation' =>  \Config\Services::validation(),
            'data' => $dataModel,
            'json' => $jsonData
        ];


        $this->render('admin/information/landing', $data);
    }

    public function about()
    {
        $dataModel = $this->model->getData(3);
        $jsonData = json_decode($dataModel['json']);
        $data = [
            'title' => 'About Us Page',
            'validation' =>  \Config\Services::validation(),
            'data' => $dataModel,
            'json' => $jsonData
        ];

        $this->render('admin/information/about', $data);
    }

    public function collection()
    {
        $dataModel = $this->model->getData(4);
        $jsonData = json_decode($dataModel['json']);
        $data = [
            'title' => 'Collection Page',
            'validation' =>  \Config\Services::validation(),
            'data' => $dataModel,
            'json' => $jsonData
        ];

        $this->render('admin/information/collection', $data);
    }

    public function station()
    {
        $dataModel = $this->model->getData(5);
        $jsonData = json_decode($dataModel['json']);
        $data = [
            'title' => 'Station Page',
            'validation' =>  \Config\Services::validation(),
            'data' => $dataModel,
            'json' => $jsonData
        ];

        $this->render('admin/information/station', $data);
    }

    public function saveWelcome()
    {
        $id = $this->request->getVar('id');
        $jsonInput = new stdClass();
        $notification = [
            'type' => 'success',
            'title' => 'Success',
            'msg' => 'You have successfully updated the data'
        ];


        $video = $this->request->getFile('video');
        $oldVideo = $this->request->getVar('oldVideo');

        if ($video->getError() == 4) {
            if ($oldVideo == 'default.jpg') {
                $oldVideo = 'default.jpg';
            } else {
                $videoName = $oldVideo;
            }
        } else {
            $videoName = $video->getRandomName();
            $video->move('upload/welcome', $videoName);
        }

        $jsonInput->video = $videoName;

        $json = json_encode($jsonInput);

        $this->model->save([
            'id' => $id,
            'json' => $json,
        ]);

        $this->notification($notification);
        return redirect()->back();
    }

    public function saveAbout()
    {
        $input = $this->request->getPost();
        $id = $this->request->getVar('id');
        $testimonies = $this->request->getFileMultiple('testimoni');
        $highlights = $this->request->getFileMultiple('highlight');

        $jsonInput = new stdClass();
        $notification = [
            'type' => 'success',
            'title' => 'Success',
            'msg' => 'You have successfully updated the data'
        ];


        $banner = $this->request->getFile('banner');
        $visionImage = $this->request->getFile('visionImage');
        $visionImage2 = $this->request->getFile('visionImage2');
        $visionImage3 = $this->request->getFile('visionImage3');
        $oldBanner = $this->request->getVar('oldBanner');
        $oldVisionImage = $this->request->getVar('oldVisionImage');
        $oldVisionImage2 = $this->request->getVar('oldVisionImage2');
        $oldVisionImage3 = $this->request->getVar('oldVisionImage3');

        $oldHighlights = $this->request->getVar('oldHighlights');
        $oldTestimoni = $this->request->getVar('oldTestimoni');
        $arrayOldTesti = json_decode($oldTestimoni);
        $arrayOldHighlights = json_decode($oldHighlights);

        $testimoniImages = [];
        if (count($testimonies) <= 1 && $testimonies[0]->getError() == 4) {
            $dataModel = $this->model->getData($id);
            $json = json_decode($dataModel['json']);
            $testimoniImages = $json->testimoni;
        } else {
            foreach ($testimonies as $key => $file) {
                //todo handle old value
                if ($file->getError() == 4) {
                    if (isset($arrayOldTesti[$key])) {
                        array_push($testimoniImages, $arrayOldTesti[$key]);
                    }
                } else {
                    $fileName = $file->getRandomName();
                    $file->move('upload/about/', $fileName);
                    array_push($testimoniImages, $fileName);
                }
            }
        }

        $highlightsImages = [];
        if (count($highlights) <= 1 && $highlights[0]->getError() == 4) {
            $dataModel = $this->model->getData($id);
            $json = json_decode($dataModel['json']);
            $highlightsImages = $json->highlights;
        } else {
            foreach ($highlights as $key => $file) {
                if ($file->getError() == 4) {
                    if ($arrayOldHighlights[$key]) {
                        array_push($highlightsImages, $arrayOldHighlights[$key]);
                    }
                } else {
                    $fileName = $file->getRandomName();
                    $file->move('upload/about/', $fileName);
                    array_push($highlightsImages, $fileName);
                }
            }
        }


        if ($banner->getError() == 4) {
            if ($oldBanner == 'default.jpg') {
                $bannerName = 'default.jpg';
            } else {
                $bannerName = $oldBanner;
            }
        } else {
            $bannerName = $banner->getRandomName();
            $banner->move('upload/about', $bannerName);
        }

        if ($visionImage->getError() == 4) {
            if ($oldVisionImage == 'default.jpg') {
                $visionImageName = 'default.jpg';
            } else {
                $visionImageName = $oldVisionImage;
            }
        } else {
            $visionImageName = $visionImage->getRandomName();
            $visionImage->move('upload/about', $visionImageName);
        }

        if ($visionImage2->getError() == 4) {
            if ($oldVisionImage2 == 'default.jpg') {
                $visionImage2Name = 'default.jpg';
            } else {
                $visionImage2Name = $oldVisionImage2;
            }
        } else {
            $visionImage2Name = $visionImage2->getRandomName();
            $visionImage2->move('upload/about', $visionImage2Name);
        }


        if ($visionImage3->getError() == 4) {
            if ($oldVisionImage3 == 'default.jpg') {
                $visionImage3Name = 'default.jpg';
            } else {
                $visionImage3Name = $oldVisionImage3;
            }
        } else {
            $visionImage3Name = $visionImage3->getRandomName();
            $visionImage3->move('upload/about', $visionImage3Name);
        }



        $jsonInput->banner = $bannerName;
        $jsonInput->visionImage = $visionImageName;
        $jsonInput->visionImage2 = $visionImage2Name;
        $jsonInput->visionImage3 = $visionImage3Name;
        $jsonInput->bannerSmallCaption = $input['bannerSmallCaption'];
        $jsonInput->bannerTitle = $input['bannerTitle'];
        $jsonInput->aboutSmallLabel = $input['aboutSmallLabel'];
        $jsonInput->aboutTitle = $input['aboutTitle'];
        $jsonInput->aboutDescription = $input['aboutDescription'];
        $jsonInput->cultureCaption = $input['cultureCaption'];

        $jsonInput->culturePointTitle1 = $input['culturePointTitle1'];
        $jsonInput->culturePointDesc1 = $input['culturePointDesc1'];
        $jsonInput->culturePointTitle2 = $input['culturePointTitle2'];
        $jsonInput->culturePointDesc2 = $input['culturePointDesc2'];
        $jsonInput->culturePointTitle3 = $input['culturePointTitle3'];
        $jsonInput->culturePointDesc3 = $input['culturePointDesc3'];
        $jsonInput->culturePointTitle4 = $input['culturePointTitle4'];
        $jsonInput->culturePointDesc4 = $input['culturePointDesc4'];

        $jsonInput->visionPointTitle1 = $input['visionPointTitle1'];
        $jsonInput->visionPointDesc1 = $input['visionPointDesc1'];
        $jsonInput->visionPointTitle2 = $input['visionPointTitle2'];
        $jsonInput->visionPointDesc2 = $input['visionPointDesc2'];
        $jsonInput->visionPointTitle3 = $input['visionPointTitle3'];
        $jsonInput->visionPointDesc3 = $input['visionPointDesc3'];
        $jsonInput->visionPointTitle4 = $input['visionPointTitle4'];
        $jsonInput->visionPointDesc4 = $input['visionPointDesc4'];

        $jsonInput->whyBobilTitle = $input['whyBobilTitle'];
        $jsonInput->whyBobilSubtitles = $input['whyBobilSubtitles'];
        $jsonInput->visonCaption = $input['visonCaption'];
        $jsonInput->visionTitle = $input['visionTitle'];
        $jsonInput->visionSubtitles = $input['visionSubtitles'];
        $jsonInput->visonCaptionWithImage = $input['visonCaptionWithImage'];
        $jsonInput->visionTitleWithImage = $input['visionTitleWithImage'];
        $jsonInput->visionSubtitlesWithImage = $input['visionSubtitlesWithImage'];
        $jsonInput->visonCaptionWithImage2 = $input['visonCaptionWithImage2'];
        $jsonInput->visionTitleWithImage2 = $input['visionTitleWithImage2'];
        $jsonInput->visionSubtitlesWithImage2 = $input['visionSubtitlesWithImage2'];
        $jsonInput->visonCaptionWithImage3 = $input['visonCaptionWithImage3'];
        $jsonInput->visionTitleWithImage3 = $input['visionTitleWithImage3'];
        $jsonInput->visionSubtitlesWithImage3 = $input['visionSubtitlesWithImage3'];
        $jsonInput->titleHighlight = $input['titleHighlight'];
        $jsonInput->testimoni = $testimoniImages;
        $jsonInput->highlights = $highlightsImages;

        $json = json_encode($jsonInput);

        $this->model->save([
            'id' => $id,
            'json' => $json,
        ]);

        $this->notification($notification);
        return redirect()->back();
    }


    public function saveLanding()
    {

        $id = $this->request->getVar('id');
        $jsonInput = new stdClass();
        $notification = [
            'type' => 'success',
            'title' => 'Success',
            'msg' => 'You have successfully updated the data'
        ];


        $image1 = $this->request->getFile('image1');
        $image2 = $this->request->getFile('image2');
        $image3 = $this->request->getFile('image3');
        $image4 = $this->request->getFile('image4');
        $oldImage1 = $this->request->getVar('oldImage1');
        $oldImage2 = $this->request->getVar('oldImage2');
        $oldImage3 = $this->request->getVar('oldImage3');
        $oldImage4 = $this->request->getVar('oldImage4');
        if ($image1->getError() == 4) {
            if ($oldImage1 == 'default.jpg') {
                $image1Name = 'default.jpg';
            } else {
                $image1Name = $oldImage1;
            }
        } else {
            $image1Name = $image1->getRandomName();
            $image1->move('upload/landing', $image1Name);
        }

        if ($image2->getError() == 4) {
            if ($oldImage2 == 'default.jpg') {
                $image2Name = 'default.jpg';
            } else {
                $image2Name = $oldImage2;
            }
        } else {
            $image2Name = $image2->getRandomName();
            $image2->move('upload/landing', $image2Name);
        }

        if ($image3->getError() == 4) {
            if ($oldImage3 == 'default.jpg') {
                $image3Name = 'default.jpg';
            } else {
                $image3Name = $oldImage3;
            }
        } else {
            $image3Name = $image3->getRandomName();
            $image3->move('upload/landing', $image3Name);
        }

        if ($image4->getError() == 4) {
            if ($oldImage4 == 'default.jpg') {
                $image4Name = 'default.jpg';
            } else {
                $image4Name = $oldImage4;
            }
        } else {
            $image4Name = $image4->getRandomName();
            $image4->move('upload/landing', $image4Name);
        }

        $jsonInput->image1 = $image1Name;
        $jsonInput->image2 = $image2Name;
        $jsonInput->image3 = $image3Name;
        $jsonInput->image4 = $image4Name;

        $json = json_encode($jsonInput);

        $this->model->save([
            'id' => $id,
            'json' => $json,
        ]);

        $this->notification($notification);
        return redirect()->back();
    }

    public function saveCollections()
    {
        $input = $this->request->getPost();
        $id = $this->request->getVar('id');
        $sliders = $this->request->getFileMultiple('slider');
        $jsonInput = new stdClass();
        $notification = [
            'type' => 'success',
            'title' => 'Success',
            'msg' => 'You have successfully updated the data'
        ];

        $slidersImages = [];
        if (count($sliders) <= 1 && $sliders[0]->getError() == 4) {
            $dataModel = $this->model->getData($id);
            $json = json_decode($dataModel['json']);
            $slidersImages = $json->sliders;
        } else {
            foreach ($sliders as $file) {
                $fileName = $file->getRandomName();
                $file->move('upload/collections/', $fileName);
                array_push($slidersImages, $fileName);
            }
        }

        $jsonInput->titleCollections = $input['titleCollections'];
        $jsonInput->sliders = $slidersImages;

        $json = json_encode($jsonInput);

        $this->model->save([
            'id' => $id,
            'json' => $json,
        ]);

        $this->notification($notification);
        return redirect()->back();
    }

    public function saveStation()
    {
        $input = $this->request->getPost();
        $id = $this->request->getVar('id');
        $jsonInput = new stdClass();
        $notification = [
            'type' => 'success',
            'title' => 'Success',
            'msg' => 'You have successfully updated the data'
        ];

        $jsonInput->smallLabelStation = $input['smallLabelStation'];
        $jsonInput->titleLabelStation = $input['titleLabelStation'];
        $jsonInput->addressStation = $input['addressStation'];
        $jsonInput->subscribeLabel = $input['subscribeLabel'];
        $jsonInput->subscribeTitle = $input['subscribeTitle'];
        $jsonInput->subscribeSubtitle = $input['subscribeSubtitle'];

        $json = json_encode($jsonInput);

        $this->model->save([
            'id' => $id,
            'json' => $json,
        ]);

        $this->notification($notification);
        return redirect()->back();
    }

    protected function render(string $layout, array $data = [])
    {

        echo view('layouts/admin/header', $data);
        echo view($layout, $data);
        echo view('layouts/admin/footer');
    }

    protected function notification(array $data)
    {
        session()->setFlashdata('toastr', $data);
    }
}
