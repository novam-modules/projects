@extends('projects::layouts.master')

@section('content')
<h1>Hello World</h1>

<div class="card">
    <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">Project:</span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active show" href="#profile" data-toggle="tab">
                            <i class="material-icons"></i>
                            <span class="sect-tile">Project Filters</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">code</i>
                            <span class="sect-tile">Tasks/Services</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i>
                            <span class="sect-tile">Daily Tasks</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active show" id="profile">
                {{--  <table class="table datatable">
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check d-inline-block">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="job_info" value="" checked="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    <span class="h4">
                                        <bold>Job Information</bold>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Job Address
                                </div>
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Project Files
                                </div>
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Office Details
                                </div>
                                <hr class="mx-3 my-1">
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Customer
                                </div>
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Customer Address
                                </div>
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Primary Contact
                                </div>
                                <hr class="mx-3 my-1">
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Project Notes
                                </div>
                            </td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                    data-original-title="Edit Task">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                    data-original-title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    <span class="h4">Tasks/Services</span>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Service Details
                                </div>
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Job Materials
                                </div>
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Crew & Labor
                                </div>
                                <hr class="mx-3 my-1">
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Sent to Billing
                                </div>
                                <div class="form-check d-inline-block mx-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Not Sent to Billing
                                </div>
                            </td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                    data-original-title="Edit Task">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                    data-original-title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" checked="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    Job Daily Tasks
                                </div>
                            </td>
                            <td></td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                    data-original-title="Edit Task">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                    data-original-title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" checked="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>Work Orders</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                    data-original-title="Edit Task">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                    data-original-title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>  --}}
                <job-viewer></job-viewer>
            </div>
            <div class="tab-pane" id="messages">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" checked="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what
                                was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                    data-original-title="Edit Task">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                    data-original-title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid
                                of?"</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                    data-original-title="Edit Task">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                    data-original-title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="settings">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My
                                Boss?</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                    data-original-title="Edit Task">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                    data-original-title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" checked="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what
                                was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                    data-original-title="Edit Task">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                    data-original-title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" value="" checked="" type="checkbox">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid
                                of?"</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm"
                                    data-original-title="Edit Task">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm"
                                    data-original-title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
