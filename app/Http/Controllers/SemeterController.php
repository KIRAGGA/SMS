<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSemeterRequest;
use App\Http\Requests\UpdateSemeterRequest;
use App\Repositories\SemeterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SemeterController extends AppBaseController
{
    /** @var  SemeterRepository */
    private $semeterRepository;

    public function __construct(SemeterRepository $semeterRepo)
    {
        $this->semeterRepository = $semeterRepo;
    }

    /**
     * Display a listing of the Semeter.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $semeters = $this->semeterRepository->all();

        return view('semeters.index')
            ->with('semeters', $semeters);
    }

    /**
     * Show the form for creating a new Semeter.
     *
     * @return Response
     */
    public function create()
    {
        return view('semeters.create');
    }

    /**
     * Store a newly created Semeter in storage.
     *
     * @param CreateSemeterRequest $request
     *
     * @return Response
     */
    public function store(CreateSemeterRequest $request)
    {
        $input = $request->all();

        $semeter = $this->semeterRepository->create($input);

        Flash::success('Semeter saved successfully.');

        return redirect(route('semeters.index'));
    }

    /**
     * Display the specified Semeter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $semeter = $this->semeterRepository->find($id);

        if (empty($semeter)) {
            Flash::error('Semeter not found');

            return redirect(route('semeters.index'));
        }

        return view('semeters.show')->with('semeter', $semeter);
    }

    /**
     * Show the form for editing the specified Semeter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $semeter = $this->semeterRepository->find($id);

        if (empty($semeter)) {
            Flash::error('Semeter not found');

            return redirect(route('semeters.index'));
        }

        return view('semeters.edit')->with('semeter', $semeter);
    }

    /**
     * Update the specified Semeter in storage.
     *
     * @param int $id
     * @param UpdateSemeterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSemeterRequest $request)
    {
        $semeter = $this->semeterRepository->find($id);

        if (empty($semeter)) {
            Flash::error('Semeter not found');

            return redirect(route('semeters.index'));
        }

        $semeter = $this->semeterRepository->update($request->all(), $id);

        Flash::success('Semeter updated successfully.');

        return redirect(route('semeters.index'));
    }

    /**
     * Remove the specified Semeter from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $semeter = $this->semeterRepository->find($id);

        if (empty($semeter)) {
            Flash::error('Semeter not found');

            return redirect(route('semeters.index'));
        }

        $this->semeterRepository->delete($id);

        Flash::success('Semeter deleted successfully.');

        return redirect(route('semeters.index'));
    }
}
