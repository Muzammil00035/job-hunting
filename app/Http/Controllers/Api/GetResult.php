<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GetResult extends BaseController
{
    //
    public function SubjectiveResults(Request $request): JsonResponse
    {
        $s1 = $request->DB_Answer;
        $s2 = $request->Candidate_Answer;
        $words1 = preg_split('/\s+/', $s1);
        $words2 = preg_split('/\s+/', $s2);
        $diffs1 = array_diff($words2, $words1);
        $diffs2 = array_diff($words1, $words2);

        $diffsLength = strlen(join("", $diffs1) . join("", $diffs2));
        $wordsLength = strlen(join("", $words1) . join("", $words2));
        if (!$wordsLength) return $this->sendError('Result Error.', 'Answers Not Found');

        $differenceRate = ($diffsLength / $wordsLength);
        $result =  [
            'Your Answer' => $s2,
            'DB Answer' => $s1,
            'Result' => ((1 - $differenceRate) * 100) .'%'
        ];
        return $this->sendResponse($result, 'Your Response.');
    }
}
